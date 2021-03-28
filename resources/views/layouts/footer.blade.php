<!-- Footer for just user authantication -->
@if(Auth::user())
    <footer class="main-footer text-center">
        <div class="container">
            <div class="footer-info">
                <span>&copy; Copyright Rights All Reserved.</span>
            </div>
        </div>
    </footer>
@endif
