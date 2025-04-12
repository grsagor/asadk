@extends('front.layout.app')

@section('content')
<div class="template-details-page">
    <!-- Banner Section -->
    <div class="page-banner" style="background-image: url('https://picsum.photos/1920/300');">
        <div class="banner-content">
            <h1>Business Template</h1>
            <p>Professional business website template with modern design</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="template-details-container">
        <!-- Preview Gallery -->
        <div class="preview-gallery">
            <div class="main-preview">
                <img src="https://picsum.photos/800/600" alt="Template Preview" class="preview-image">
            </div>
            <div class="thumbnail-grid">
                <img src="https://picsum.photos/800/601" alt="Thumbnail 1" class="thumbnail active">
                <img src="https://picsum.photos/800/602" alt="Thumbnail 2" class="thumbnail">
                <img src="https://picsum.photos/800/603" alt="Thumbnail 3" class="thumbnail">
                <img src="https://picsum.photos/800/604" alt="Thumbnail 4" class="thumbnail">
            </div>
        </div>

        <!-- Template Info -->
        <div class="template-info-grid">
            <div class="template-info-main">
                <div class="template-description">
                    <h2>Description</h2>
                    <p>A professional business website template perfect for corporate websites, startups, and small businesses. Features a modern design with optimized user experience and mobile responsiveness.</p>
                </div>

                <div class="template-features">
                    <h2>Key Features</h2>
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> Responsive Design</li>
                        <li><i class="fas fa-check"></i> Multiple Page Layouts</li>
                        <li><i class="fas fa-check"></i> Contact Forms</li>
                        <li><i class="fas fa-check"></i> Blog Section</li>
                        <li><i class="fas fa-check"></i> Portfolio Gallery</li>
                        <li><i class="fas fa-check"></i> SEO Optimized</li>
                        <li><i class="fas fa-check"></i> Fast Loading Speed</li>
                        <li><i class="fas fa-check"></i> Easy Customization</li>
                    </ul>
                </div>

                <div class="template-tech">
                    <h2>Technical Details</h2>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <strong>Framework:</strong>
                            <span>Bootstrap 5</span>
                        </div>
                        <div class="tech-item">
                            <strong>Compatibility:</strong>
                            <span>All Modern Browsers</span>
                        </div>
                        <div class="tech-item">
                            <strong>Documentation:</strong>
                            <span>Included</span>
                        </div>
                        <div class="tech-item">
                            <strong>Support:</strong>
                            <span>6 Months</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="template-sidebar">
                <div class="pricing-card">
                    <div class="price-tag">$59</div>
                    <div class="license-info">
                        <h3>Regular License</h3>
                        <p>For single end product used by you or your client</p>
                    </div>
                    <ul class="license-features">
                        <li><i class="fas fa-check"></i> Quality Checked</li>
                        <li><i class="fas fa-check"></i> Future Updates</li>
                        <li><i class="fas fa-check"></i> 6 Months Support</li>
                    </ul>
                    <a href="#" class="btn-purchase">Purchase Now</a>
                    <a href="#" class="btn-demo">Live Demo</a>
                </div>

                <div class="author-card">
                    <img src="https://picsum.photos/100/100" alt="Author" class="author-avatar">
                    <div class="author-info">
                        <h3>John Doe</h3>
                        <p>Elite Author</p>
                    </div>
                    <a href="#" class="btn-contact">Contact Author</a>
                </div>
            </div>
        </div>

        <!-- Related Templates -->
        <div class="related-templates">
            <h2>Related Templates</h2>
            <div class="templates-grid">
                <div class="template-card">
                    <div class="template-preview">
                        <img src="https://picsum.photos/400/300" alt="Related Template 1">
                        <div class="template-actions">
                            <a href="#" class="btn-preview">View Details</a>
                            <a href="#" class="btn-demo">Live Demo</a>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3>Corporate Template</h3>
                        <div class="template-meta">
                            <span class="category">Business</span>
                            <span class="price">$49</span>
                        </div>
                    </div>
                </div>

                <div class="template-card">
                    <div class="template-preview">
                        <img src="https://picsum.photos/400/301" alt="Related Template 2">
                        <div class="template-actions">
                            <a href="#" class="btn-preview">View Details</a>
                            <a href="#" class="btn-demo">Live Demo</a>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3>Startup Template</h3>
                        <div class="template-meta">
                            <span class="category">Business</span>
                            <span class="price">$39</span>
                        </div>
                    </div>
                </div>

                <div class="template-card">
                    <div class="template-preview">
                        <img src="https://picsum.photos/400/302" alt="Related Template 3">
                        <div class="template-actions">
                            <a href="#" class="btn-preview">View Details</a>
                            <a href="#" class="btn-demo">Live Demo</a>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3>Agency Template</h3>
                        <div class="template-meta">
                            <span class="category">Business</span>
                            <span class="price">$69</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.template-details-page {
    background-color: #f8f9fa;
}

.page-banner {
    position: relative;
    height: 300px;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    margin-bottom: 50px;
}

.page-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(26, 26, 26, 0.7);
}

.banner-content {
    position: relative;
    z-index: 1;
}

.banner-content h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.template-details-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    margin-bottom: 50px;
}

.preview-gallery {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.main-preview {
    margin-bottom: 20px;
}

.main-preview img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.thumbnail-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.thumbnail {
    width: 100%;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.thumbnail:hover {
    opacity: 0.8;
}

.thumbnail.active {
    border: 2px solid #1A1A1A;
}

.template-info-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
    margin-bottom: 50px;
}

.template-info-main {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.template-description,
.template-features,
.template-tech {
    margin-bottom: 30px;
}

.template-description h2,
.template-features h2,
.template-tech h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #1A1A1A;
}

.features-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    list-style: none;
    padding: 0;
}

.features-list li {
    display: flex;
    align-items: center;
    gap: 10px;
}

.features-list i {
    color: #1A1A1A;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.tech-item {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.template-sidebar {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.pricing-card,
.author-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.price-tag {
    font-size: 2.5rem;
    font-weight: bold;
    color: #1A1A1A;
    margin-bottom: 15px;
}

.license-info h3 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.license-features {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.license-features li {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.btn-purchase,
.btn-demo,
.btn-contact {
    display: block;
    text-align: center;
    padding: 12px;
    border-radius: 5px;
    text-decoration: none;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
}

.btn-purchase {
    background-color: #1A1A1A;
    color: white;
}

.btn-demo,
.btn-contact {
    background-color: #f8f9fa;
    color: #1A1A1A;
    border: 1px solid #1A1A1A;
}

.author-card {
    text-align: center;
}

.author-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.author-info h3 {
    margin-bottom: 5px;
}

.related-templates h2 {
    font-size: 1.5rem;
    margin-bottom: 30px;
    color: #1A1A1A;
}

.templates-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.template-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.template-card:hover {
    transform: translateY(-5px);
}

.template-preview {
    position: relative;
}

.template-preview img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.template-actions {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(26, 26, 26, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.template-preview:hover .template-actions {
    opacity: 1;
}

.template-actions a {
    padding: 8px 16px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}

.btn-preview {
    background-color: #1A1A1A;
    color: white;
}

.btn-demo {
    background-color: white;
    color: #1A1A1A;
}

.template-info {
    padding: 15px;
}

.template-info h3 {
    margin: 0;
    font-size: 18px;
    color: #1A1A1A;
}

.template-meta {
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
}

.category {
    color: #666;
}

.price {
    font-weight: bold;
    color: #1A1A1A;
}

@media (max-width: 991px) {
    .template-info-grid {
        grid-template-columns: 1fr;
    }

    .features-list,
    .tech-grid {
        grid-template-columns: 1fr;
    }

    .templates-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .thumbnail-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .templates-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainPreview = document.querySelector('.main-preview img');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Update main preview
            mainPreview.src = this.src;
            
            // Update active state
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>
@endsection