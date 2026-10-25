@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p class="sub">What this project is.</p>

    <div class="card">
        <p>
            This is version 0.1 of a basic Point-of-Sale (POS) system, rebuilt from the
            CodeIgniter version (TFA1) using Laravel.
        </p>
        <ul class="list">
            <li>Routes are defined in <code>routes/web.php</code>.</li>
            <li><strong>PageController</strong> serves the landing and about pages.</li>
            <li><strong>CustomerController</strong> and <strong>UserController</strong> serve the account pages.</li>
            <li>Account data comes from static PHP arrays, so no database is involved yet.</li>
            <li>Views are Blade templates that share one layout.</li>
        </ul>
    </div>
@endsection
