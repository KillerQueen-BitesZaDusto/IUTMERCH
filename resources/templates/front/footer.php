<footer class="ct-footer">
    <div class="container">
        <form name="contentForm" enctype="multipart/form-data" method="post" action="">
            <div class="ct-footer-pre text-center-lg">
                <div class="inner">
                    <span>Join Bananawani to receive updates, news & events!</span>
                </div>
                <div class="inner">
                    <div class="form-group">
                        <input name="formfields[nl_email]" id="nl_email" class="validate[required]"
                            placeholder="Enter your email address" type="text" value=""> <label for="nl_email"
                            class="sr-only">Email Address</label> <button type="submit"
                            class="btn btn-motive">Join</button>
                    </div>
                </div>
            </div>
        </form>
        <ul class="ct-footer-list text-center-sm">
            <li>
                <h2 class="ct-footer-list-header">Learn More</h2>
                <ul>
                    <li>
                        <a href="">Company</a>
                    </li>
                    <li>
                        <a href="">Clients</a>
                    </li>
                    <li>
                        <a href="">News</a>
                    </li>
                    <li>
                        <a href="">Careers</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">Services</h2>
                <ul>
                    <li>
                        <a href="">Design</a>
                    </li>
                    <li>
                        <a href="">Marketing</a>
                    </li>
                    <li>
                        <a href="">Sales</a>
                    </li>
                    <li>
                        <a href="">Programming</a>
                    </li>
                    <li>
                        <a href="">Support</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">The Industry</h2>
                <ul>
                    <li>
                        <a href="">Thought Leadership</a>
                    </li>
                    <li>
                        <a href="">Webinars</a>
                    </li>
                    <li>
                        <a href="">Events</a>
                    </li>
                    <li>
                        <a href="">Sponsorships</a>
                    </li>
                    <li>
                        <a href="">Advisors</a>
                    </li>
                    <li>
                        <a href="">Training Program</a>
                    </li>
                    <li>
                        <a href="">Activities & Campaigns</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">Public Relations</h2>
                <ul>
                    <li>
                        <a href="">Bananawani Blog</a>
                    </li>
                    <li>
                        <a href="">Videos</a>
                    </li>
                    <li>
                        <a href="">News Releases</a>
                    </li>
                    <li>
                        <a href="">Newsletters</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">About</h2>
                <ul>
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="">Our Team</a>
                    </li>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="ct-footer-meta text-center-sm">
            <div class="row">
                <div class="col-sm-6 col-md-2">
                    <img alt="logo" src="../resources/uploads/IUT.jpg" style="width:50%; height: 15%;">
                </div>
                <div class="col-sm-6 col-md-3">
                    <address>
                        <span>Bananawani<br></span>224,227 South Hall of Residence<br>
                        Islamic University of Technology<br>
                        <span>Phone: (+880) 1799-433-551</a></span>
                    </address>
                </div>
                <div class="col-sm-6 col-md-2 ct-u-paddingTop10">
                    <a href="" target="_blank"><img alt="app store"
                            src="https://www.solodev.com/assets/footer/appstore.png"></a>
                </div>
                <div class="col-sm-6 col-md-2 ct-u-paddingTop10">
                    <a href="" target="_blank"><img alt="google play store"
                            src="https://www.solodev.com/assets/footer/androidstore.png"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <ul class="ct-socials list-unstyled list-inline">
                        <li>
                            <a href="" target="_blank"><img alt="facebook"
                                    src="https://www.solodev.com/assets/footer/facebook-white.png"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img alt="twitter"
                                    src="https://www.solodev.com/assets/footer/twitter-white.png"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img alt="youtube"
                                    src="https://www.solodev.com/assets/footer/youtube-white.png"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img alt="instagram"
                                    src="https://www.solodev.com/assets/footer/instagram-white.png"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img alt="pinterest"
                                    src="https://www.solodev.com/assets/footer/pinterest-white.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ct-footer-post">
        <div class="container">
            <div class="inner-left">
                <ul>
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="">News</a>
                    </li>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="inner-right">
                <p>Copyright © 2019 Bananawani&nbsp;<a href="">Privacy Policy</a></p>
                <p><a class="ct-u-motive-color" href="" target="_blank">Web Design</a> by Bananawani for Web Development
                    Lab</p>
            </div>
        </div>
    </div>
</footer>
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = "block"; 
        setTimeout(carousel, 2000); // Change image every 2 seconds
}
    
    
    </script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>