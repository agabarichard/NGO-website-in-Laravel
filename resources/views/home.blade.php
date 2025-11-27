<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owesirahili Foundation</title>
    <meta name="description" content="Owesirahili Foundation is a non-profit organization dedicated to empowering communities through education, healthcare, and sustainable development initiatives.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
            {{-- <style>
            
            </style> --}}
            <div class="card">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <h2>Our Mission</h2>
                <p>To empower communities by providing access to quality education, healthcare, and sustainable development resources.</p>
            </div>
            <div class="card">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
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
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h2>Education</h2>
            <p>Providing access to quality education for children and adults.</p>
        </div>
        <div class="pillar">
            <i class="fa fa-ambulance" aria-hidden="true"></i>
            <h2>Healthcare</h2>
            <p>Improving healthcare services and awareness in underserved communities.</p>
        </div>
        <div class="pillar">
            <i class="fa fa-deviantart" aria-hidden="true"></i>
            <h2>Sustainable Development</h2>
            <p>Promoting environmentally friendly practices and sustainable livelihoods.</p>
        </div>
        <div class="pillar">
            <i class="fa fa-users" aria-hidden="true"></i>
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
    </div>

    {{-- get involved section --}}
    <h1>Get Involved</h1>
    <p>Join us in making a difference! There are many ways you can get involved with Owesirahili Foundation:</p>
    <div class="get-involved">  
        <div class="involvement-option">
            <h2>Volunteer</h2>
            <p>Share your time and skills to help us in our mission.</p>
        </div>
        <div class="involvement-option">
            <h2>Donate</h2>
            <p>Your contributions help us fund our programs and reach more communities.</p>
        </div>
        <div class="involvement-option">
            <h2>Partner with Us</h2>
            <p>Collaborate with us to amplify our impact through strategic partnerships.</p>
        </div>
    </div>
  
</body>
@include('includes.footer')
</html>