class Sparkles {
    config = {
        id: null,
        canvas: null,
        ctx: null,
        gl: null,
        perspectiveMatrix: null,
        drawType: 0,
        target: [],
        count: 0,
        coefficient: 0.4,
        vertices: [],
        randomTargetXArr: [],
        randomTargetYArr: [],
        interval: null,
        paused: !1,
        fsScript: "\n    #ifdef GL_ES\n    precision highp float;\n    #endif\n    void main(void) {\n      gl_FragColor = vec4($REPLACE$);\n    }",
        vsScript:
            "\n      attribute vec3 vertexPosition;\n\n      uniform mat4 modelViewMatrix;\n      uniform mat4 perspectiveMatrix;\n\n      void main(void) {\n        gl_Position = perspectiveMatrix * modelViewMatrix * vec4(vertexPosition, 1);\n      }",
    };
    userConfig = { cw: 400, ch: 400, imagesArray: [], canvasId: "canvas", numLines: 6e4, fixedSize: !1, fieldOfView: 23, color: "#FFFFFF", opacity: 1, timeout: 0, targetCoefficient: 0.001, compressionSpeed: 1.1 };
    constructor(i) {
        (this.userConfig = Object.assign(this.userConfig, i)), this.prepareWindow(), this.prepareColor();
    }
    initTimer() {
        clearInterval(this.config.interval), this.userConfig.timeout && (this.config.interval = setInterval(this.onCLickHandler.bind(this), this.userConfig.timeout));
    }
    prepareColor() {
        let i =
            this.hexToRgb(this.userConfig.color)
                .map(function (i) {
                    return i / 255;
                })
                .join(",") +
            "," +
            this.userConfig.opacity;
        (this.config.fsScript = this.config.fsScript.replace("$REPLACE$", i)), (this.config.fsScript = this.config.fsScript.replace("$REPLACE$", i));
    }
    hexToRgb(i) {
        if (("#" === i.charAt(0) && (i = i.substr(1)), i.length < 2 || i.length > 6)) return !1;
        let t,
            e,
            n,
            r = i.split("");
        if (2 === i.length) (t = parseInt(r[0].toString() + r[1].toString(), 16)), (e = t), (n = t);
        else if (3 === i.length) (t = parseInt(r[0].toString() + r[0].toString(), 16)), (e = parseInt(r[1].toString() + r[1].toString(), 16)), (n = parseInt(r[2].toString() + r[2].toString(), 16));
        else {
            if (6 !== i.length) return !1;
            (t = parseInt(r[0].toString() + r[1].toString(), 16)), (e = parseInt(r[2].toString() + r[3].toString(), 16)), (n = parseInt(r[4].toString() + r[5].toString(), 16));
        }
        return [t, e, n];
    }
    prepareWindow() {
        window.cancelRequestAnimFrame =
            window.cancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || clearTimeout;
    }
    init() {
        (this.config.canvas = document.createElement("canvas")), (this.ctx = this.config.canvas.getContext("2d"));
        const i = this.userConfig.imagesArray.length;
        for (let t = 0; t < i; t++) {
            let i = new Image();
            (i.crossOrigin = "Anonymous"), (i.src = this.userConfig.imagesArray[t]), (i.onload = this.onLoadImageHandler.bind(this, i, this.config.canvas, this.ctx, t));
        }
        this.initTimer();
    }
    onLoadImageHandler(i, t, e, n) {
        const r = i.width;
        (t.width = r), (t.height = r), e.drawImage(i, 0, 0);
        const o = e.getImageData(0, 0, r, r);
        this.config.target[n] = [];
        const s = o.data.length;
        for (let i = 0; i < s; i += 4)
            if (0 === o.data[i]) {
                const t = i / 4,
                    e = { x: (t % r) / r - 0.5, y: -parseInt(t / r) / r + 0.5 };
                this.config.target[n].push(e);
            }
        this.config.count++, this.config.count === this.userConfig.imagesArray.length && this.loadScene();
    }
    loadScene() {
        if (((this.config.canvas = document.getElementById(this.userConfig.canvasId)), (this.config.gl = this.config.canvas.getContext("experimental-webgl")), !this.config.gl)) return void alert("There's no WebGL context available.");
        this.onResizeHandler(), this.config.gl.viewport(0, 0, this.config.canvas.width, this.config.canvas.height);
        const i = this.config.gl.createShader(this.config.gl.VERTEX_SHADER);
        if ((this.config.gl.shaderSource(i, this.config.vsScript), this.config.gl.compileShader(i), !this.config.gl.getShaderParameter(i, this.config.gl.COMPILE_STATUS)))
            return alert("Couldn't compile the vertex shader"), void this.config.gl.deleteShader(i);
        const t = this.config.gl.createShader(this.config.gl.FRAGMENT_SHADER);
        if ((this.config.gl.shaderSource(t, this.config.fsScript), this.config.gl.compileShader(t), !this.config.gl.getShaderParameter(t, this.config.gl.COMPILE_STATUS)))
            return alert("Couldn't compile the fragment shader"), void this.config.gl.deleteShader(t);
        if (
            ((this.config.gl.program = this.config.gl.createProgram()),
                this.config.gl.attachShader(this.config.gl.program, i),
                this.config.gl.attachShader(this.config.gl.program, t),
                this.config.gl.linkProgram(this.config.gl.program),
                !this.config.gl.getProgramParameter(this.config.gl.program, this.config.gl.LINK_STATUS))
        )
            return alert("Unable to initialise shaders"), this.config.gl.deleteProgram(this.config.gl.program), this.config.gl.deleteProgram(i), void this.config.gl.deleteProgram(t);
        this.config.gl.useProgram(this.config.gl.program);
        const e = this.config.gl.getAttribLocation(this.config.gl.program, "vertexPosition");
        this.config.gl.enableVertexAttribArray(e),
            this.config.gl.clearColor(0, 0, 0, 1),
            this.config.gl.clearDepth(1),
            this.config.gl.enable(this.config.gl.BLEND),
            this.config.gl.disable(this.config.gl.DEPTH_TEST),
            this.config.gl.blendFunc(this.config.gl.SRC_ALPHA, this.config.gl.ONE);
        const n = this.config.gl.createBuffer();
        this.config.gl.bindBuffer(this.config.gl.ARRAY_BUFFER, n),
            this.setup(),
            this.config.gl.bufferData(this.config.gl.ARRAY_BUFFER, this.config.vertices, this.config.gl.DYNAMIC_DRAW),
            this.config.gl.clear(this.config.gl.COLOR_BUFFER_BIT | this.config.gl.DEPTH_BUFFER_BIT);
        const r = this.config.canvas.width / this.config.canvas.height,
            o = 1 * Math.tan((this.userConfig.fieldOfView * Math.PI) / 360),
            s = -o,
            g = o * r,
            c = -g,
            a = (g + c) / (g - c),
            h = (o + s) / (o - s),
            f = 2 / (g - c),
            l = 2 / (o - s);
        this.config.perspectiveMatrix = [f, 0, a, 0, 0, l, h, 0, 0, 0, 10001 / 9999, 2e4 / 9999, 0, 0, -1, 0];
        const d = this.config.gl.getAttribLocation(this.config.gl.program, "vertexPosition");
        this.config.gl.vertexAttribPointer(d, 3, this.config.gl.FLOAT, !1, 0, 0);
        const m = this.config.gl.getUniformLocation(this.config.gl.program, "modelViewMatrix"),
            u = this.config.gl.getUniformLocation(this.config.gl.program, "perspectiveMatrix");
        this.config.gl.uniformMatrix4fv(m, !1, new Float32Array(this.config.perspectiveMatrix)),
            this.config.gl.uniformMatrix4fv(u, !1, new Float32Array([1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])),
            this.animate(),
            this.addEventListeners();
    }
    setup() {
        this.config.vertices = [];
        for (let i = 0; i < this.userConfig.numLines; i++) {
            this.config.vertices.push(0, 0, 1.83), this.config.vertices.push(0, 0, 1.83);
            const i = this.config.target[this.config.drawType][parseInt(this.config.target[this.config.drawType].length * Math.random())];
            this.config.randomTargetXArr.push(i.x), this.config.randomTargetYArr.push(i.y);
        }
        (this.config.vertices = new Float32Array(this.config.vertices)), (this.config.randomTargetXArr = new Float32Array(this.config.randomTargetXArr)), (this.config.randomTargetYArr = new Float32Array(this.config.randomTargetYArr));

        console.log(this.config);
    }
    animate() {
        this.config.paused || this.drawScene(), (this.config.id = requestAnimationFrame(this.animate.bind(this)));
    }
    drawScene() {
        this.draw(),
            this.config.gl.lineWidth(1),
            this.config.gl.bufferData(this.config.gl.ARRAY_BUFFER, this.config.vertices, this.config.gl.DYNAMIC_DRAW),
            this.config.gl.clearColor(0, 0, 0, 0),
            this.config.gl.clear(this.config.gl.COLOR_BUFFER_BIT | this.config.gl.DEPTH_BUFFER_BIT),
            this.config.gl.drawArrays(this.config.gl.LINES, 0, this.userConfig.numLines),
            this.config.gl.flush();
    }
    draw() {
        let i, t, e, n;
        (this.config.cn += 0.1), (this.config.coefficient += 0.1 * (this.userConfig.targetCoefficient - this.config.coefficient));
        for (let r = 0; r < 2 * this.userConfig.numLines; r += 2) {
            (this.config.count += 0.3), (i = 3 * r), (this.config.vertices[i] = this.config.vertices[i + 3]), (this.config.vertices[i + 1] = this.config.vertices[i + 4]), (n = parseInt(r / 2));
            const o = this.config.randomTargetXArr[n],
                s = this.config.randomTargetYArr[n];
            (t = this.config.vertices[i + 3]),
                (t += (o - t) * this.config.coefficient + ((Math.random() - 0.5) * this.config.coefficient) / this.userConfig.compressionSpeed),
                (this.config.vertices[i + 3] = t),
                (e = this.config.vertices[i + 4]),
                (e += (s - e) * this.config.coefficient + ((Math.random() - 0.5) * this.config.coefficient) / this.userConfig.compressionSpeed),
                (this.config.vertices[i + 4] = e);
        }
    }
    onResizeHandler() {
        const i = this.userConfig.fixedSize ? this.userConfig.cw : this.config.canvas.parentNode.offsetWidth,
            t = this.userConfig.fixedSize ? this.userConfig.ch : this.config.canvas.parentNode.offsetHeight;
        (this.config.canvas.height = i <= t ? i : t), (this.config.canvas.width = i);
    }
    onCLickHandler() {
        (this.config.drawType = (this.config.drawType + 1) % this.userConfig.imagesArray.length), this.clickCalculate();
    }
    backClickHandler(i) {
        i.preventDefault(), (this.config.drawType = this.config.drawType - 1 < 0 ? this.userConfig.imagesArray.length - 1 : (this.config.drawType - 1) % this.userConfig.imagesArray.length), this.clickCalculate();
    }
    clickCalculate() {
        (this.config.coefficient = 0.3), (this.config.randomTargetXArr = []), (this.config.randomTargetYArr = []);
        for (let i = 0; i < this.userConfig.numLines; i++) {
            const i = this.config.target[this.config.drawType][parseInt(this.config.target[this.config.drawType].length * Math.random())];
            this.config.randomTargetXArr.push(i.x), this.config.randomTargetYArr.push(i.y);
        }
        (this.config.vertices = new Float32Array(this.config.vertices)),
            (this.config.randomTargetXArr = new Float32Array(this.config.randomTargetXArr)),
            (this.config.randomTargetYArr = new Float32Array(this.config.randomTargetYArr)),
            this.initTimer();
    }
    onScrollHandler() {
        const i = this.config.canvas.getBoundingClientRect();
        this.config.paused = i.top + i.height < 0;
    }
    addEventListeners() {
        window.addEventListener("resize", this.onResizeHandler.bind(this)),
            window.addEventListener("scroll", this.onScrollHandler.bind(this)),
            this.config.canvas.addEventListener("click", this.onCLickHandler.bind(this)),
            this.config.canvas.addEventListener("contextmenu", this.backClickHandler.bind(this));
    }
}