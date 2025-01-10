<style>
    /* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
}

.modal-content {
    background-color: #fff;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border-radius: 8px;
    width: 300px; /* Could be more or less, depending on screen size */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.modal-content h2 {
    margin-bottom: 20px;
}

.modal-options a {
    display: block;
    margin: 10px 0;
    padding: 10px 15px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
}

.modal-options a:hover {
    background-color: #0056b3;
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
}

.close:hover {
    color: #000;
}
</style>
<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                    <img src="Frontend/assets/img/logo.png" style="width: 20"; height="30"; alt="">
                </a>

                <style>
                    .logoDesign {
                        color: red;
                        font-family: monospace;
                    }
                </style>

                <a href="{{ url('/') }}" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
            </div><!-- /.logo-box -->
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li class="dropdown">
                        <a href="{{ url('/') }}">Home</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{ route('user.About') }}">About</a>


                    </li>
                    <li class="dropdown">
                        <a href="{{ route('user.Services') }}">Services</a>

                    </li>


                    {{-- chatting part start --}}

                    <li><a href="{{ url('chatify') }}">Metting</a></li>


                    <li><a href="{{ route('user.Contact') }}">Contact</a></li>

                    @if (Route::has('login'))
                        @auth


                            <x-app-layout>
                            </x-app-layout>
                        @else
                            <li><a href="{{ route('login') }}">Login</a> </li>
                            <li><a href="#" id="registerLink">Register</a></li>
                        @endauth
                    @endif


                </ul><!-- /.main-nav__navigation-box -->

            </div><!-- /.main-nav__main-navigation -->


            <div class="main-nav__right">
                <a href="{{ route('user.Contact') }}" class="thm-btn main-nav-one__btn"><i class="far fa-clock"></i>
                    Appointment</a><!-- /.thm-btn main-nav-one__btn -->
            </div><!-- /.main-nav__right -->


        </div><!-- /.inner-container -->
    </div><!-- /.container -->

    </div><!-- /.inner-container -->
    </div><!-- /.container -->

</nav>
<!-- Modal Structure -->
<div id="registerModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Register</h2>
        <div class="modal-options">
            <a href="{{ route('register') }}">Be a User</a>
            <a href="{{ route('doctor.register') }}">Be a Doctor</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const registerLink = document.getElementById("registerLink");
    const modal = document.getElementById("registerModal");
    const closeModal = modal.querySelector(".close");

    // Show modal when clicking "Register"
    registerLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior
        modal.style.display = "block";
    });

    // Close modal when clicking on the "X"
    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Close modal when clicking outside the modal content
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

</script>