<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Owesirahili Foundation</title>
     <meta name="description" content="Get in touch with Owesirahili Foundation to learn more about our initiatives and how you can contribute to making a difference.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
@include('includes.header')
<body>
    <h1>Contact Us</h1>
    <p>If you have any questions, suggestions, or would like to get involved with Owesirahili Foundation, please reach out to us using the contact information below:</p>
    <div class="contact-info">
        <p><strong>Email:</strong> info@owesirahili.org</p>
        <p><strong>Phone:</strong> +123 456 7890</p>
        <p><strong>Address:</strong> 123 Main Street, City, Country</p>
    </div>
    <h2>Contact Form</h2>
    <form action="{{ route('contact.submit') }}" method="POST"> 
        @csrf
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
@include('includes.footer')
</html>