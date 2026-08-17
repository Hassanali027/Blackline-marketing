@include('components.htmlboilerplate')
<style>
    body {
        font-family: 'Sora', sans-serif;
    }
    .service-banner {
        position: relative;
        min-height: 600px;
        background-image: url('{{ asset("images/service-page-banner.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }
    
    .service-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    .glass-card {
        background: rgba(134, 134, 134, 0.30);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border-radius: 20px;
        padding: 50px;
        position: relative;
        z-index: 1;
        max-width: 1240px;
        margin: 60px auto 0;
    }

    .subtitle-text {
        font-weight: 700;
        font-size: 16px;
        line-height: 26px;
        letter-spacing: 1px;
        color: #ffffff;
    }

    .title-text {
        font-weight: 700;
        font-size: 40px;
        line-height: 46px;
        letter-spacing: 1px;
        color: #FAF9F6;
    }

    .gradient-btn {
        width: 298px;
        height: 60px;
        background: linear-gradient(90deg, #AF8445 0%, #E8C988 34%, #E5CA83 67%, #AF8445 100%);
        border: none;
        border-radius: 4px;
        color: #111;
        font-weight: 700;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }
    
    .gradient-btn:hover {
        opacity: 0.9;
        color: #111;
    }

    @media (max-width: 768px) {
        .service-banner {
            min-height: 420px;
            align-items: flex-start;
            /* padding-top: 40px; */
            padding-bottom: 40px;
            background-position: center top;
        }
        .title-text {
            font-size: 28px;
            line-height: 38px;
        }
        .subtitle-text {
            font-size: 14px;
            line-height: 22px;
        }
        .glass-card {
            padding: 24px 20px;
            border-radius: 16px;
        }
        .gradient-btn {
            width: 100%;
            height: 54px;
            font-size: 15px;
        }
    }

    /* --- New Extracted CSS --- */
 
</style>
@include('components.header')
<main class="service-page">
    <section class="service-banner">
        <div class="container-fluid px-4 px-md-5">
            <div class="glass-card text-start">
                <h6 class="subtitle-text text-uppercase mb-3">SOCIAL MEDIA MANAGEMENT</h6>
                <h1 class="title-text mb-4">Your Brand Deserves More Than a Feed.</h1>
                <a href="{{ route('book-now') }}" class="gradient-btn">Book a Discovery Call &rarr;</a>
            </div>
        </div>
    </section>


</main>    

@include('components.cta')

@include('components.footer')

<script src="{{ asset('js/home.js') }}"></script>
</body>
</html>