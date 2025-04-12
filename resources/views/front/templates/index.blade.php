@extends('front.layout.app')

@section('content')
<div class="templates-page">
    <!-- Banner Section -->
    <div class="page-banner" style="background-image: url('https://picsum.photos/1920/300');">
        <div class="banner-content">
            <h1>Website Templates</h1>
            <p>Choose from our collection of professional website templates</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="templates-container">
        <!-- Filters Sidebar -->
        <aside class="filters-sidebar">
            <div class="search-box">
                <input type="text" placeholder="Search templates..." class="search-input">
                <i class="fas fa-search"></i>
            </div>

            <div class="filter-section">
                <h3>Categories</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="business">
                        Business
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="portfolio">
                        Portfolio
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="ecommerce">
                        E-Commerce
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" name="category" value="blog">
                        Blog
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Price Range</h3>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="radio" name="price" value="all">
                        All Prices
                    </label>
                    <label class="filter-option">
                        <input type="radio" name="price" value="free">
                        Free
                    </label>
                    <label class="filter-option">
                        <input type="radio" name="price" value="premium">
                        Premium
                    </label>
                </div>
            </div>
        </aside>

        <!-- Templates Grid -->
        <div class="templates-grid">
            <!-- Template Card -->
            <div class="template-card">
                <div class="template-preview">
                    <img src="https://picsum.photos/400/300" alt="Business Template">
                    <div class="template-actions">
                        <a href="{{ url('/templates/business-template') }}" class="btn-preview">View Details</a>
                        <a href="#" class="btn-demo">Live Demo</a>
                    </div>
                </div>
                <div class="template-info">
                    <h3>Business Template</h3>
                    <div class="template-meta">
                        <span class="category">Business</span>
                        <span class="price">$59</span>
                    </div>
                </div>
            </div>

            <!-- More Template Cards -->
            <div class="template-card">
                <div class="template-preview">
                    <img src="https://picsum.photos/400/301" alt="Portfolio Template">
                    <div class="template-actions">
                        <a href="{{ url('/templates/portfolio-template') }}" class="btn-preview">View Details</a>
                        <a href="#" class="btn-demo">Live Demo</a>
                    </div>
                </div>
                <div class="template-info">
                    <h3>Portfolio Template</h3>
                    <div class="template-meta">
                        <span class="category">Portfolio</span>
                        <span class="price">Free</span>
                    </div>
                </div>
            </div>

            <div class="template-card">
                <div class="template-preview">
                    <img src="https://picsum.photos/400/302" alt="E-Commerce Template">
                    <div class="template-actions">
                        <a href="{{ url('/templates/ecommerce-template') }}" class="btn-preview">View Details</a>
                        <a href="#" class="btn-demo">Live Demo</a>
                    </div>
                </div>
                <div class="template-info">
                    <h3>E-Commerce Template</h3>
                    <div class="template-meta">
                        <span class="category">E-Commerce</span>
                        <span class="price">$79</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.templates-page {
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

.templates-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 30px;
    margin-bottom: 50px;
}

.filters-sidebar {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    height: fit-content;
}

.search-box {
    position: relative;
    margin-bottom: 20px;
}

.search-input {
    width: 100%;
    padding: 10px 35px 10px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

.search-box i {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
}

.filter-section {
    margin-bottom: 20px;
}

.filter-section h3 {
    font-size: 16px;
    margin-bottom: 10px;
    color: #1A1A1A;
}

.filter-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.filter-option {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-size: 14px;
}

.templates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
    overflow: hidden;
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

.btn-preview,
.btn-demo {
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 14px;
    text-decoration: none;
    transition: background-color 0.3s ease;
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

@media (max-width: 768px) {
    .templates-container {
        grid-template-columns: 1fr;
    }

    .filters-sidebar {
        margin-bottom: 30px;
    }
}
</style>
@endsection