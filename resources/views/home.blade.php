<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owesirahili Foundation</title>
    <meta name="description" content="Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
@include('includes.header')
<body>
{{-- hero section --}}
    <div class="hero">
        <h1>Welcome to Owesirahili Foundation</h1>
        <p>Empowering Communities, Transforming Lives</p>
    </div>
{{-- who are we section --}}
    <div class="who-we-are">
        <div class="container">
            <div class="image">
            <img src="{{ asset('images/who_are_we.jpg') }}" alt="Who We Are">
        </div>
        <div class="text">
            <h2>Who We Are</h2>
            <p>Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives. Our mission is to create lasting change by providing resources and support to those in need.</p>
            <p>Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives. Our mission is to create lasting change by providing resources and support to those in need.</p>
            <p>Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives. Our mission is to create lasting change by providing resources and support to those in need.</p>
            <p>Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives. Our mission is to create lasting change by providing resources and support to those in need.</p>
            <button>Read more about us</button>
        </div>
    </div>

    {{-- our mission and vision section --}}
    <h1>Our Mission and Vision</h1>
        <div class="cards">
            <style>
            .cards {
                display: flex;
                justify-content: center;
                gap: 2rem;
                margin-top: 2rem;
                flex-wrap: wrap;
            }
            .card {
                background-color: #f9f9f9;
                padding: 1.5rem;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                max-width: 300px;
                text-align: center;
            }
            .card h2 {
                margin-bottom: 1rem;
            }
            .card p {
                font-size: 1rem;
                color: #555;
            }
            </style>
            <div class="card">
                <h2>Our Mission</h2>
                <p>To empower communities by providing access to quality education, healthcare, and sustainable development resources.</p>
            </div>
            <div class="card">
                <h2>Our Vision</h2>
                <p>A world where every individual has the opportunity to thrive and contribute to their community's growth and well-being.</p>
            </div>
        </div>
    </div>
    {{-- our four pillars section --}}

    <h1>Our Four Pillars</h1>
    <p>These pillars represent the core areas of focus for our organization, guiding our efforts to create meaningful and sustainable impact in the communities we serve.</p>
    <div class="pillars">
        <div class="pillar">
            <h2>Education</h2>
            <p>Providing access to quality education for children and adults.</p>
        </div>
        <div class="pillar">
            <h2>Healthcare</h2>
            <p>Improving healthcare services and awareness in underserved communities.</p>
        </div>
        <div class="pillar">
            <h2>Sustainable Development</h2>
            <p>Promoting environmentally friendly practices and sustainable livelihoods.</p>
        </div>
        <div class="pillar">
            <h2>Community Empowerment</h2>
            <p>Strengthening community capacities through training and resources.</p>
        </div>
    </div>

    {{-- our impact section --}}
    <h1>Our Impact</h1>
    <p>Over the years, Owesirahili Foundation has made significant strides in transforming lives and communities. Here are some highlights of our impact:</p>
    <div class="impact-stats">
        <div class="stat">
            <h2>5000+</h2>
            <p>Children Educated</p>
        </div>
        <div class="stat">
            <h2>2000+</h2>
            <p>Medical Camps Held</p>
        </div>
        <div class="stat">
            <h2>150</h2>
            <p>Communities Served</p>
        </div>
        <div class="stat">
            <h2>300+</h2>
            <p>Volunteers Engaged</p>
        </div>
    </div>

        {{-- our core programes section --}}
        <h1>Our Core Programs</h1>
        <p>Owesirahili Foundation implements a variety of programs aimed at addressing the key needs of the communities we serve. Our core programs include:</p>
        <div class="programs">
            <div class="program">
                <h2>Scholarship Program</h2>
                <p>Providing scholarships to underprivileged students to pursue their education.</p>
            </div>
            <div class="program">
                <h2>Health Outreach</h2>
                <p>Organizing medical camps and health awareness campaigns.</p>
            </div>
            <div class="program">
                <h2>Clean Water Initiative</h2>
                <p>Installing clean water systems in rural communities.</p>
            </div>
        </div>     


</body>
@include('includes.footer')
</html>