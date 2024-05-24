<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_dashboard.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                    <a href="{{ route('student_dashboard') }}">
                    <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
                </div>
            <ul>    
                <li><a href="{{ route('student_about') }}">About</a></li>
                <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">My Profile</a></li>
                <li><a href="{{ route('student_violations') }}">Violations</a></li>
                <li><a href="{{ route('student_policy') }}">Policy</a></li>
                <li><a href="{{ route('student_interventions') }}">Intervention Programs</a></li>
                <li><a href="{{ route('login') }}">Logout</a></li>
            </ul>
        </nav>       
    </header>
    <h1>Welcome, Student!</h1>


    <!-- Content sections for each navigation link -->
    <div class="card-container">
    <div class="card">
        <img src="{{ asset('images/about.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">ABOUT</h2>
                <p class="card-description">Violation Management System (VMS) handles the management and tracing of student misconducts in schools. The system is provided as a whole array of violation-related types such as academic cheating, student misbehavior, poor attendance records, substance abuse and violation of dress codes and other as well. Different levels are designed to categorize violations according to their intensity so that they are subject to appropriate... <a href="{{ route('student_about') }}">READ MORE</a></p>
            
                
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/violations.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Violations</h2>
                <p class="card-description">Any acts or behaviors that depart from the set rules and policies of the school are considered violations. These might be anything from transgressions of the dress code to more serious crimes like bullying or drug misuse. Every infraction is classified and entered into the system to guarantee that an exhaustive record is kept up to date. This classification aids in evaluating the frequency and seriousness of the infractions, which is essential for choosing... <a href="{{ route('student_violations') }}">READ MORE</a></p>
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/policy.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Privacy Policy</h2>
                <p class="card-description">Rules and policies established by the school must be followed, deviations from these guidelines are considered violations. These can include less serious transgressions like dressing code violations or more significant ones like bullying or drug addiction. To guarantee that an exhaustive record is kept, every infraction is classified and entered into the system. In order to choose the best interventions and penalties, it is essential to evaluate the... <a href="{{ route('student_policy') }}">READ MORE</a></p>
            </div>
    </div>

    <div class="card">
        <img src="{{ asset('images/intervention.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Intervention</h2>
                <p class="card-description">The policies and plans put in place to deal with and rectify student infractions are known as interventions. Based on the type and seriousness of the infraction, the Violation Management System includes a number of intervention options. A few of these might be restorative justice initiatives, behavioral training, counseling services, and parental involvement campaigns. The purpose of interventions is to help the student acquire... <a href="{{ route('student_interventions') }}">READ MORE</a></p>
                </p>
            </div>
    </div>
</div>
    <!-- Add more content sections for other links -->
    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
