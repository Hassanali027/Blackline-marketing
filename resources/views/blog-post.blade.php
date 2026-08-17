<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->meta_title ?? $blog->title }} | BlackLine Marketing</title>
    <meta name="description" content="{{ $blog->meta_description ?? Str::limit(strip_tags($blog->content), 150) }}">
    <meta name="keywords" content="{{ $blog->meta_keywords ?? 'blog, marketing, branding' }}">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-post.css') }}">
</head>
<body>
    @include('components.header')
    
    <main class="blog-post-page">
        <div class="container">
            <div class="post-grid-container">
                <!-- Left Column: Main Post Content -->
                <div class="post-main-content">
                    <div class="post-cover">
                        <img src="{{ $blog->image ? asset($blog->image) : 'https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?q=80&w=1200&auto=format&fit=crop' }}" alt="{{ $blog->title }}">
                        <div class="post-cover-overlay">
                            <h1 style="color: #fff; font-size: 42px; font-weight: 700; max-width: 800px;">{{ $blog->title }}</h1>
                            <span class="post-meta" style="color: rgba(255,255,255,0.8); margin-top: 15px; display: inline-block;">{{ $blog->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                    
                    <div class="post-body">
                        {!! $blog->content !!}
                    </div>
                    
                    <div class="post-share-bottom">
                        <span>Like what you see? Share with a friend.</span>
                        <div class="social-share-links">
                            <a href="#" class="social-share-btn" aria-label="Share on Facebook">
                                <svg viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/></svg>
                            </a>
                            <a href="#" class="social-share-btn" aria-label="Share on X">
                                <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="#" class="social-share-btn" aria-label="Share on LinkedIn">
                                <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Sidebar Widgets -->
                <div class="post-sidebar">
                    <!-- Author Card -->
                    <div class="sidebar-card">
                        <div class="author-info">
                            <div class="author-image">
                                <img src="{{ asset('images/usman-ansar.jpg') }}" alt="Usman Ansar">
                            </div>
                            <div class="author-details">
                                <h3 class="author-name">Usman Ansar</h3>
                                <a href="https://linkedin.com" target="_blank" class="linkedin-badge" aria-label="LinkedIn Profile">
                                    <svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                            </div>
                        </div>
                        <p class="author-bio">With 11 years in SaaS, I've built MillionVerifier and SAAS First. Passionate about SaaS, data, and AI. Let's connect if you share the same drive for success!</p>
                    </div>
                    
                    <!-- Share Community Card -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">Share with your community!</h3>
                        <div class="social-share-links">
                            <a href="#" class="social-share-btn" aria-label="Share on Facebook">
                                <svg viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/></svg>
                            </a>
                            <a href="#" class="social-share-btn" aria-label="Share on X">
                                <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="#" class="social-share-btn" aria-label="Share on LinkedIn">
                                <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Article Outline Card -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-card-title">In this Article :</h3>
                        <ul class="outline-list">
                            <li class="outline-item active"><a href="#">Exploring Generative AI in Content Creation</a></li>
                            <li class="outline-item"><a href="#">Steering Clear of Common AI Writing Pitfalls</a></li>
                            <li class="outline-item"><a href="#">Understanding ChatGPT Capabilities - Define Your Style</a></li>
                            <li class="outline-item"><a href="#">Understand Your Readers</a></li>
                            <li class="outline-item"><a href="#">Creating Quality AI-powered Blogs that Stand Out</a></li>
                            <li class="outline-item"><a href="#">Conclusion: Embracing AI in Blog Creation</a></li>
                            <li class="outline-item"><a href="#">Afterword: The AI Behind This Article</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Related Articles -->
            <section class="related-articles-section">
                <h2 class="related-title">Related Articles</h2>
                <div class="blog-grid">
                    @for ($i = 0; $i < 3; $i++)
                    <a href="{{ route('blog-post') }}" class="blog-card">
                        <div class="blog-card-image">
                            <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?q=80&w=800&auto=format&fit=crop" alt="Blog Thumbnail">
                        </div>
                        <div class="blog-card-content">
                            <h3 class="blog-card-title">How Luxury Brands Can Build a Social Presence People Remember</h3>
                            <p class="blog-card-excerpt">A strategic look at building distinctive, high-value social media experiences.</p>
                            <p class="blog-card-meta">Oct 19 &bull; 10 min read</p>
                        </div>
                    </a>
                    @endfor
                </div>
            </section>
            
        </div>
    </main>

    @include('components.footer')
</body>
</html>
