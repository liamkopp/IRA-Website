
            <!-- site-footer -->
            <div class="site-footer">

                <nav class="site-nav">
                    <?php

                    $args = array(
                        'theme_location' => 'footer'
                    );

                    ?>

                    <?php wp_nav_menu( $args ); ?>
                </nav>


                <footer id="mcmaster-footer" class="maroon">
                    <ul id="social-links">
                      <li class="twitter">
                        <a href="http://www.twitter.com/mcmasteru" target="_blank"><span class="sr-only">Twitter</span>
                        <svg id="social-twitter" class="social" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 17.1"><path class="social" d="M16.9.3c-.2-.2-.4-.3-.7-.3H.9C.7 0 .5.1.3.3.1.5 0 .7 0 .9v15.2c0 .3.1.5.3.7.2.2.4.3.7.3h15.2c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7V.9l-.3-.6zm-3.8 6.3v.3c0 .6-.1 1.3-.3 1.9-.2.6-.5 1.2-.8 1.8-.4.6-.8 1.1-1.3 1.5-.5.4-1.1.8-1.9 1.1-.7.3-1.5.4-2.3.4-1.3 0-2.5-.3-3.6-1h.6c1.1 0 2-.3 2.9-1-.5 0-1-.2-1.4-.5-.4-.3-.7-.7-.8-1.2h.4c.2 0 .4 0 .6-.1-.5-.1-1-.4-1.4-.8-.4-.4-.6-.9-.6-1.4.4.1.8.2 1.1.2-.7-.5-1-1.1-1-2 0-.4.1-.8.3-1.2.6.8 1.3 1.4 2.2 1.8s1.7.7 2.7.7c0-.1-.1-.3-.1-.5 0-.6.3-1.2.7-1.6s1-.7 1.7-.7 1.3.2 1.7.7c.5-.1 1-.3 1.5-.6-.2.6-.5 1-1 1.3.5-.1.9-.2 1.4-.4-.4.6-.8 1-1.3 1.3z"/></svg>
                        </a>
                      </li>
                      <li class="facebook">
                        <a href="http://www.facebook.com/mcmasteruniversity" target="_blank"><span class="sr-only">Facebook</span>
                        <svg id="social-facebook" class="social" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 17.1"><path class="social" d="M16.2 0c.3 0 .5.1.7.3.2.2.3.4.3.7v15.2c0 .3-.1.5-.3.7-.2.2-.4.3-.7.3h-4.4v-6.6H14l.3-2.6h-2.6V6.3c0-.4.1-.7.3-.9.2-.2.5-.3 1-.3h1.4V2.7c-.5-.1-1.1-.1-2-.1-1 0-1.8.3-2.4.9S9.2 4.9 9.2 6v1.9H6.9v2.6h2.2v6.6H.9c-.3 0-.5-.1-.7-.3-.1-.1-.2-.3-.2-.6V.9C0 .6.1.4.3.2.5.1.7 0 .9 0h15.3z"/></svg>
                        </a>
                      </li>
                      <li class="youtube">
                        <a href="http://www.youtube.com/mcmasterutv" target="_blank"><span class="sr-only">YouTube</span>
                        <svg id="social-youtube" class="social" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 17.1"><path class="social" d="M16.9.3c-.2-.2-.4-.3-.7-.3H.9C.7 0 .5.1.3.3.1.5 0 .7 0 .9v15.3c0 .3.1.5.3.7.2.2.4.3.7.3h15.2c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7V.9c-.1-.2-.1-.4-.3-.6zm-6.8 2.2h.7v3.3c0 .1.1.2.2.2s.3-.1.5-.3V2.5h.7v4.1h-.7v-.4c-.3.3-.6.5-.9.5-.2 0-.4-.1-.5-.3 0-.1-.1-.3-.1-.6V2.5zM7.3 3.8c0-.4.1-.8.2-1 .2-.2.5-.4.9-.4s.7.1.9.4c.2.2.2.5.2 1v1.5c0 .4-.1.8-.2 1-.2.2-.5.4-.9.4s-.7-.2-.9-.5c-.1-.2-.2-.5-.2-.9V3.8zm-2-2.7l.6 2.2.6-2.2h.8l-1 3.3v2.2h-.8V4.4c-.1-.4-.3-1-.6-1.8 0-.2-.1-.4-.2-.8s-.2-.6-.3-.7h.9zm7.9 14.6c-1 .1-2.6.2-4.6.2-2 0-3.6-.1-4.6-.2-.3 0-.6-.2-.8-.4s-.4-.5-.5-.8c-.1-.6-.2-1.6-.2-2.9 0-1.3.1-2.3.2-2.9.1-.3.2-.6.5-.8.2-.2.5-.3.8-.4 1-.1 2.5-.2 4.6-.2 2.1 0 3.6.1 4.6.2.3 0 .6.2.8.4.2.2.4.5.5.8.1.6.2 1.6.2 2.9 0 1.3-.1 2.3-.2 2.9-.1.3-.2.6-.5.8s-.5.4-.8.4z"/><path class="social" d="M7.4 13.3c-.2.2-.3.3-.5.3-.1 0-.2-.1-.2-.2v-3.3H6v3.2c0 .3 0 .5.1.6.1.2.2.3.5.3s.6-.2.8-.5v.4h.7V10h-.7v3.3zM8.4 6c.2 0 .4-.2.4-.6V3.7c0-.4-.1-.6-.4-.6-.2 0-.4.2-.4.6v1.7c0 .4.2.6.4.6zM3.3 9.6h.9v4.7H5V9.6h.9v-.8H3.3zM12.7 10.1c-.4 0-.7.1-.9.4-.1.2-.2.5-.2 1V13c0 .4.1.8.2 1 .2.3.5.4.9.4s.7-.1.9-.4c.1-.1.1-.3.2-.4V13H13v.5c0 .2-.2.3-.3.3-.3 0-.4-.2-.4-.6v-.7h1.5v-.8c0-.4-.1-.8-.2-1-.2-.4-.5-.6-.9-.6zm.3 1.7h-.7v-.4c0-.4.1-.6.4-.6s.3.2.3.6v.4zM10.3 10.1c-.3 0-.5.1-.8.4V8.8h-.7v5.5h.7v-.4c.2.3.5.5.8.5.3 0 .5-.2.6-.5.1-.2.1-.4.1-.8v-1.6c0-.4 0-.7-.1-.8-.1-.4-.3-.6-.6-.6zm0 3c0 .4-.1.5-.3.5-.1 0-.2-.1-.4-.2V11c.1-.1.2-.2.4-.2s.3.2.3.6v1.7z"/></svg>
                        </a>
                      </li>
                      <li class="flickr">
                        <a href="http://www.flickr.com/photos/mcmasterdailynews/" target="_blank"><span class="sr-only">Flickr</span>
                        <svg id="social-flickr" class="social" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 17.1"><path class="social" d="M16.9.3c-.2-.2-.4-.3-.7-.3H.9C.7 0 .5.1.3.3.1.5 0 .7 0 .9v15.2c0 .3.1.5.3.7.2.2.4.3.7.3h15.2c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7V.9l-.3-.6zm-9.8 9.9c-.5.5-1 .7-1.7.7s-1.2-.2-1.7-.7-.7-1-.7-1.7.2-1.2.7-1.7 1-.7 1.7-.7 1.2.2 1.7.7.7 1 .7 1.7-.2 1.3-.7 1.7zm6.3 0c-.5.5-1 .7-1.7.7s-1.2-.2-1.7-.7-.7-1-.7-1.7.2-1.2.7-1.7 1-.7 1.7-.7 1.2.2 1.7.7c.5.5.7 1 .7 1.7s-.2 1.3-.7 1.7z"/></svg>
                        </a>
                      </li>
                      <li class="dailynews">
                        <a href="http://feeds.feedburner.com/McmasterUniversity-DailyNewsHeadlines" target="_blank"><span class="sr-only">DailyNews</span>
                        <svg id="social-rss" class="social" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.1 17.1"><path class="social" d="M16.9.3c-.2-.2-.4-.3-.7-.3H.9C.7 0 .5.1.3.3.1.5 0 .7 0 .9v15.2c0 .3.1.5.3.7.2.2.4.3.7.3h15.2c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7V.9l-.3-.6zM5.3 13.9c-.3.3-.6.4-1 .4s-.7-.1-1-.4c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.7.1 1 .4.4.6.4 1-.1.7-.4 1zm4.2.3c-.1.1-.2.1-.3.1H7.8c-.1 0-.2 0-.2-.1-.1-.1-.1-.2-.1-.2-.1-1.2-.5-2.2-1.4-3-.8-.8-1.8-1.3-2.9-1.4-.1 0-.2 0-.2-.1s-.1-.1-.1-.2V7.9c0-.1 0-.2.1-.3s.2-.1.3-.1c1.7.1 3.2.8 4.4 2 1.2 1.2 1.9 2.7 2 4.4-.1.1-.1.2-.2.3zm4.3 0c-.1.1-.2.1-.3.1h-1.4c-.1 0-.2 0-.2-.1-.1-.1-.1-.1-.1-.2-.1-1.5-.5-2.9-1.2-4.2-.8-1.4-1.9-2.4-3.2-3.2S4.7 5.4 3.2 5.4c-.1 0-.2-.1-.2-.1-.1-.1-.1-.2-.1-.3V3.6c0-.1 0-.2.1-.3 0 0 .1-.1.2-.1 1.1 0 2.3.2 3.3.6 1.1.4 2 .9 2.9 1.6.9.7 1.6 1.4 2.3 2.3s1.2 1.8 1.6 2.9c.4 1.1.6 2.2.6 3.3 0 .1 0 .2-.1.3z"/></svg>
                        </a>
                      </li>
                    </ul>
                    <ul id="contact-links">
                      <li><a href="http://www.mcmaster.ca">&copy; <?php echo date('Y'); ?> McMaster University</a></li>
                      <li><a href="https://www.google.ca/maps/place/McMaster+University/@43.260879,-79.919225,17z/data=!3m1!4b1!4m2!3m1!1s0x882c84ac44f72ac1:0x399e00ea6143011c" target="_blank">1280 Main Street West</a></li>
                      <li><a href="https://www.google.ca/maps/place/McMaster+University/@43.260879,-79.919225,17z/data=!3m1!4b1!4m2!3m1!1s0x882c84ac44f72ac1:0x399e00ea6143011c" target="_blank">Hamilton, Ontario &nbsp;L8S 4L8</a></li>
                      <li><a href="tel:+19055259140">(905) 525-9140</a>
                      </li>
                      <li><a href="http://www.mcmaster.ca/opr/html/opr/contact_us/main/contact_us.html">Contact McMaster University</a></li>
                      <li><a href="http://www.mcmaster.ca/opr/html/footer/main/terms_of_use.html">Terms of Use &amp; Privacy Policy</a></li>
                    </ul>
                    <a href="http://www.mcmaster.ca"><span class="sr-only">McMaster University</span>
                      <svg id="mcmaster-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236.2 131">
                        <g id="letters">
                          <path class="logoletters" d="M45.2 40.9H45c-.8 0-1.4-.1-1.9-.7-.6-.8-.6-3.3-.5-4.3v-28V7c0-1.1-.1-3.1.4-3.8.2-.2 1-.1 1.7-.1h.4c1.9 0 2-1.3 2-1.7 0-.5-.1-.8-.4-1.1-.4-.4-1-.3-1.5-.3h-7c-.7 0-1.7 0-2.2 1.3L24.2 31.7 14.5 4.4c-.4-1.2-.6-1.7-.7-1.9 0-.1-.1-.3-.1-.4V2c-.3-.9-.6-2-2-2h-7-.3C4 0 3.3-.1 2.9.3c-.3.3-.4.6-.4 1.1 0 .4.1 1.7 2 1.7 1.3 0 2.1.1 2.4.4.3.4.3 1.3.2 2.9 0 .3-1.9 29.7-1.9 29.8-.2 3.5-.4 4.7-3.1 4.7-1.9 0-2.1 1-2.1 1.5s.2 1.4 1.5 1.4c.9 0 1.8-.1 2.7-.1.9-.1 1.8-.1 2.7-.1.9 0 1.8.1 2.7.1.9.1 1.8.1 2.7.1.5 0 1.9 0 1.9-1.4 0-.4-.1-.7-.4-.9-.5-.5-1.4-.5-1.9-.5h-.1c-1.2 0-2-.3-2.5-.8-1.1-1.1-1-3.4-.9-6.3l1.6-26 10.9 31.6c.2.6.3.8.4 1v.1c.1.5.4 1.7 1.4 1.7.9 0 1.2-.9 1.4-1.4 0-.1 0-.1.1-.2L36.7 7.2v28.9c0 1.2 0 3.3-.7 4-.5.5-1.7.8-2.4.8h-.2c-.5 0-1.3 0-1.9.5-.3.3-.4.6-.4 1 0 .5.2 1.4 1.7 1.4 1.2 0 2.4-.1 3.5-.1 1.2-.1 2.4-.1 3.6-.1 1 0 1.9.1 2.9.1.9.1 1.9.1 2.9.1 1.5 0 1.7-.9 1.7-1.4 0-.4-.1-.7-.4-1-.4-.5-1.3-.5-1.8-.5z" />
                          <path class="logoletters" d="M60.2 44.6c3.6 0 6.9-1.2 9.6-3.6 1.8-1.7 2.1-2.5 2.1-2.9 0-.6-.5-1.1-1-1.1s-.9.4-1.3.9c0 .1-.1.1-.1.1-1.8 1.9-4.1 2.9-6.9 2.9-7 0-11.3-7.2-11.3-13.9 0-4.2 1.6-8.3 4.4-10.9 1.4-1.4 3.9-2.7 6-2.7 2.8 0 4.3 2.7 5.6 4.9.9 1.6 1.6 2.8 2.7 2.8.3 0 .6-.1.8-.4.6-.7.6-2.1.5-3.5v-.3-.6c.1-1 .1-2.3-.8-2.9-2.2-1.7-5.7-2.4-8.1-2.4-9.2 0-17 8-17 17.5.2 8.6 6.9 16.1 14.8 16.1z" />
                          <path class="logoletters" d="M95.5 40.7c0-.1 0-.1.1-.1l12.6-33.4v28.9c0 1.2 0 3.3-.7 4-.5.5-1.7.8-2.4.8h-.2c-.5 0-1.3 0-1.9.5-.3.3-.4.6-.4 1 0 .5.2 1.4 1.7 1.4 1.2 0 2.4-.1 3.5-.1 1.2-.1 2.4-.1 3.6-.1 1 0 1.9.1 2.9.1.9.1 1.9.1 2.9.1 1.5 0 1.7-.9 1.7-1.4 0-.4-.1-.7-.4-1-.5-.5-1.3-.5-1.9-.5h-.2c-.8 0-1.4-.1-1.9-.7-.6-.8-.6-3.3-.5-4.3v-28V7c0-1.1-.1-3.1.4-3.8.3-.4 1.1-.4 1.7-.3h.4c1.9 0 2-1.3 2-1.7 0-.5-.1-.8-.4-1.1-.4-.4-1.1-.4-1.6-.3h-7c-.7 0-1.7 0-2.2 1.3L95.7 31.7l-10-28.2c-.2-.6-.3-.9-.4-1 0-.2-.1-.3-.1-.5-.3-.9-.6-2-2-2h-7.3c-.5 0-1.1-.1-1.6.3-.2.3-.3.6-.3 1.1 0 .4.1 1.7 2 1.7 1.3 0 2.1.1 2.4.4.3.4.3 1.3.2 2.9-1.8 29.6-1.9 29.8-1.9 29.8-.2 3.5-.4 4.7-3.1 4.7-1.9 0-2.1 1-2.1 1.5s.2 1.4 1.5 1.4c.9 0 1.8-.1 2.7-.1.9-.1 1.8-.1 2.7-.1.9 0 1.8.1 2.7.1.9.1 1.8.1 2.7.1.5 0 1.9 0 1.9-1.4 0-.4-.1-.7-.4-.9-.5-.5-1.4-.5-1.9-.5h-.1c-1.2 0-2-.3-2.5-.8-1.1-1.1-1-3.4-.9-6.3L81.5 8l10.8 31.4c.2.7.4 1 .4 1.2v.1c.1.5.4 1.7 1.4 1.7.9-.2 1.2-1.1 1.4-1.7z" />
                          <path class="logoletters" d="M135.3 40.3c.6 1.5 1.6 3.9 4 3.9 1.8 0 3.6-1.2 4.9-2.2l.1-.1c.6-.5 1.6-1.5 1.6-2.5 0-.6-.5-1.1-1-1.1s-.8.4-1.1.7c-.4.5-1 1-1.7 1-.3 0-.5-.1-.7-.3-.9-.9-.9-3.5-.9-4.6V17.7c0-1.7.1-3.4-1.4-4.8-1.3-1.3-3.4-2-6.2-2-4.1 0-8.7 1.9-11.8 5-1.3 1.2-2.8 3.4-2.8 5.4 0 .9.5 1.4 1.4 1.4.9 0 2.3-.6 2.9-1 1.1-.5 1.5-1.5 1.9-2.5l.1-.3c1.6-3.9 3.6-5.5 6.8-5.5 3.2 0 3.5 1.8 3.5 5.7v3.1c0 2.4 0 2.4-2.1 3.4 0 0-1.7.9-3 1.6-1 .5-1.9 1-1.9 1l-.4.2c-3.7 2-9.2 5-9.2 10.1 0 4 3.3 6.1 6.5 6.1 4.4 0 7.9-3.2 9.6-4.7.2-.2.4-.4.6-.5.1.2.2.6.3.9zm-6.5-9.7c.1-.1.4-.2.9-.5l4.9-2.7c.1 0 .2-.1.3-.1h.1c0 .2.1.5 0 1.1v4.4c0 2.2-.1 3.3-1.4 4.9-1.5 1.6-3.5 2.6-5.5 2.6-1.8 0-3.8-.9-3.8-3.6-.2-3.1 2-4.8 4.5-6.1zM159.4 23.7c-3.5-1.3-6.6-2.5-6.6-5.9 0-3 3.1-4.6 5.3-4.6 4.2 0 5.3 2.7 6 4.6.4 1.1.8 2 1.7 2 .3 0 .6-.1.8-.3.6-.7.5-2.1.4-3.4v-.3-.6c.1-1 .2-2.4-1.1-3-1.6-.7-5.1-1.2-6.8-1.2-3.2 0-5.8.8-7.8 2.4-2.3 1.9-3.6 4.3-3.6 7 0 5.8 5.5 7.8 9.5 9.2.3.1.5.2.6.2 2.8 1 5.7 2.4 5.7 6.2 0 4.1-3.7 6.3-7.2 6.3-5.2 0-6-3.8-6.5-6.6-.3-1.6-.6-3-1.8-3-1.2 0-1.3 1.4-1.4 2v.1s0 .6-.2 3.8v1.3c0 1 0 2.1 1.2 2.7 2.3 1.3 6.2 2.2 8.3 2.2 5.2 0 12.6-3.4 12.6-10.8.2-6.8-4.7-8.7-9.1-10.3zM185.4 38.3c-.4 0-.7.3-1.2.7-.8.7-2 1.7-3.4 1.7-.7 0-1.3-.2-1.8-.7-1.4-1.4-1.4-4.7-1.4-6.8v-18c0-.7.1-.9.2-.9.1-.1.5-.1.9-.1h4.9c.6 0 1.1.1 1.4-.3.4-.3.4-.9.4-1.4 0-.5 0-1.5-1.1-1.5H178c-.4 0-.5 0-.5-.8v-5c0-1.2-.7-1.4-1.1-1.4-.7 0-1 .7-1.2 1-1.4 3.2-3.1 4.9-5.9 6.9l-.1.1c-.3.3-.8.7-.8 1.3 0 .3.1.6.3.8.5.4 1.3.4 2 .4h1.1c0 .1.1.2.1.7v19.1c0 2.7-.1 5.9 1.5 8.1 1.1 1.5 3 2.4 5 2.4 2.3 0 4.5-1 6.3-2.8.4-.3 1.5-1.4 1.5-2.4.2-.5-.2-1.1-.8-1.1z" />
                          <path class="logoletters" d="M193.3 24.6h19.5c.3 0 1.3-.1 1.3-1.8 0-2.4-1-5.5-2.3-7.4-2.1-2.9-5.6-4.6-9.6-4.6-4.4 0-8.5 1.7-11.8 4.8-3.2 3.1-4.7 6.9-4.7 12.1 0 9.4 6.6 16.7 14.9 16.7 4.2 0 7.4-1.3 10.4-4.1 1.8-1.7 2.6-2.8 2.6-3.5 0-.6-.5-1.1-1.1-1.1-.5 0-.8.3-1.4 1-1.3 1.3-3.6 3.6-7.9 3.6-7.7 0-11.7-7.1-11.7-14.1 0-.8.1-1.3.2-1.4.4-.2.9-.2 1.6-.2zm.3-6.9c1.8-2.8 4.7-4.4 7.7-4.4 1.5 0 3.7.3 5.1 2 .9 1.1 1.5 2.6 1.5 3.8 0 1.2-.6 1.9-1.9 2.2-1.8.5-5.3.5-7.2.5H193.3c-.4 0-1 0-1.2-.1 0 0-.1-.1-.1-.2.1-1 1.1-3 1.6-3.8zM232 11.2c-3.4 0-5.7 3.1-7 4.8-.1.1-.2.2-.2.3v-.2-3.6c0-.3 0-.9-.3-1.2-.1-.1-.4-.3-.8-.3-.7 0-1.1.5-1.4.9l.1.1-.1-.1-.2.2c-1 1.3-3.6 3-5 3.5-.1 0-.2.1-.2.1-.6.2-1.6.5-1.6 1.6 0 .7.5 1.1 1.3 1.1h.8c.7 0 1.2.1 1.4.4.3.4.5 1.7.5 3.9v14.6c.1 2.6 0 3.8-2.4 4h-.3c-.6 0-2 .1-2 1.5 0 .8.6 1.3 1.5 1.3 1 0 2-.1 3-.1 1-.1 2-.1 3-.1.9 0 1.9 0 2.8.1 1 .1 2 .1 3.1.1.8 0 1.3-.5 1.3-1.3 0-1.3-1.4-1.4-2-1.5h-.3c-2.3-.2-2.4-1.4-2.4-4V24.6c0-2.6 0-4.3 1.3-6.4.7-.9 1.6-2.3 2.8-2.3.5 0 .8.4 1.4 1 .6.7 1.3 1.7 2.7 1.7 1.9 0 3.2-1.4 3.2-3.4.2-2.3-1.6-4-4-4zM24.6 51c-.5 0-1 0-1.5.1-.5 0-.9.1-1.4.1-.5 0-1.1 0-1.6-.1-.6 0-1.1-.1-1.7-.1-.4 0-.8.1-1 .4-.2.2-.3.5-.3.8 0 .4.2.6.3.7.4.4.9.4 1.2.4h.1c.8 0 1.4 0 1.7.6.3.6.3 2.8.3 3.6v11.6c0 1.9 0 3.6-1.2 4.9-1.6 1.8-4.1 2-5.5 2-1 0-4.3-.2-5.4-2.4-.7-1.3-.7-3.9-.7-5.6V55.6c0-1 0-1.7.2-2 .2-.2.7-.3 1.6-.3 1.3 0 1.5-.6 1.5-1.1 0-.7-.5-1.1-1.2-1.1s-1.4 0-2.1.1c-.7 0-1.4.1-2.1.1-.7 0-1.3 0-2-.1-.6 0-1.4-.1-2.1-.1-.4 0-.7.1-.9.3-.2.2-.3.5-.3.8 0 .5.3 1.1 1.5 1.1.9 0 1.4.1 1.6.3.3.3.3 1 .2 2v13.6c0 2.7 0 5.2 2.4 7 2.1 1.7 5.4 2 7.2 2 3.3 0 5.7-.8 7.3-2.3 2.2-2.1 2.2-4.3 2.2-6.9V58.1v-2-.7c0-1.7.1-2.2 1.3-2.2 1.4 0 1.7-.6 1.7-1.1 0-.2-.1-1.1-1.3-1.1zM45.1 75.7h-.2c-1.1-.1-1.2-.5-1.2-2.1v-7.5c0-1.9 0-3.9-1.2-5.6-1.1-1.6-2.7-2.4-4.8-2.4-2.6 0-4.4 1.7-5.5 2.7v-1.6c0-.3 0-.6-.3-.9-.1-.1-.3-.2-.6-.2-.5 0-.8.4-1 .6 0 0-.1.1-.1.2-.5.7-2 1.7-2.8 1.9h-.1c-.4.1-1.1.4-1.1 1.2 0 .5.4.9 1 .9h.5c.4 0 .6.1.6.1.1.1.2.4.2 2.1v8.5c0 1.6-.1 2-1.2 2.1h-.2c-.3 0-1.4.1-1.4 1.1 0 .5.3 1 1.1 1 .6 0 1.2 0 1.8-.1.6 0 1.1-.1 1.7-.1.5 0 1.1 0 1.6.1.6 0 1.2.1 1.8.1.6 0 1-.4 1-1 0-1-1-1.1-1.4-1.1h-.1c-1.1-.1-1.2-.5-1.2-2.1V66c0-1.6.1-2.3 1-3.4.9-1 2-1.6 3.2-1.6 1.3 0 2.4.6 3 1.6.6 1 .6 2.5.6 3.8v7.2c0 1.6-.1 2-1.2 2.1h-.2c-.3 0-1.4.1-1.4 1.1 0 .5.3 1 1.1 1 .6 0 1.2 0 1.7-.1.6 0 1.1-.1 1.7-.1.5 0 1.1 0 1.6.1.6 0 1.2.1 1.8.1.6 0 1-.4 1-1 .6-1-.5-1.1-.8-1.1zM55.6 75.7h-.2c-1.1-.1-1.2-.5-1.2-2.1V59.2c0-.2 0-.6-.3-.9-.1-.1-.3-.2-.6-.2-.5 0-.8.4-1 .6l-.1.1c-.5.7-2 1.7-2.8 1.9h-.1c-.4.1-1.1.4-1.1 1.2 0 .5.4.9 1 .9h.5c.4 0 .6.1.6.1.1.1.2.4.2 2.1v8.5c0 1.6-.1 2-1.2 2.1h-.2c-.3 0-1.4.1-1.4 1.1 0 .5.3 1 1.1 1 .6 0 1.2 0 1.8-.1.6 0 1.1-.1 1.7-.1.5 0 1.1 0 1.6.1.6 0 1.2.1 1.8.1.6 0 1-.4 1-1 .3-.9-.7-1-1.1-1zM50.3 53.1c0 1.5.9 2.5 2.1 2.5 1.3 0 2.2-1 2.2-2.6 0-1.2-.8-2.5-2.1-2.5-1.2 0-2.2 1.1-2.2 2.6zM76.5 58.7c-.2-.2-.5-.2-.7-.2h-5.5c-.9 0-1.1.5-1.1.9 0 .7.5 1 1.6 1 .3 0 .9.1.9.5 0 .3-.2.9-.4 1.3 0 .1-.1.2-.1.3-.1.1-.2.5-.5 1.1l-3.3 8.1c-3.2-8.7-3.3-8.9-3.3-8.9l-.1-.1c-.1-.4-.5-1.3-.5-1.7 0-.6.7-.6.8-.6h.1c.3 0 .9 0 1.2-.3.2-.2.3-.4.3-.6 0-.3-.1-.6-.3-.7-.3-.3-.7-.3-.9-.3h-6.8c-.2 0-.5 0-.8.2 0 .3-.1.5-.1.8 0 .3.1.6.3.8.2.2.5.2.9.2 1.1.1 1.2.4 1.7 1.7l.1.3c2 5.4 5.3 14.3 5.3 14.4l.2.5c.1.5.5.8.9.8.6 0 .9-.7 1.1-1.1V77l-.1-.1h.1s5.2-12.6 5.3-12.7c.1-.2.2-.4.2-.6.5-1.4 1.1-2.9 2.3-3.1h.1c.3 0 1.3-.1 1.3-1.1.1-.1.1-.4-.2-.7zM81.3 66.5h11.3c.2 0 1-.1 1-1.3 0-1.5-.6-3.3-1.4-4.4-1.3-1.8-3.4-2.8-5.7-2.8-2.6 0-5.1 1-7 2.9-1.9 1.9-2.8 4.1-2.8 7.2 0 5.6 3.9 10 8.9 10 2.5 0 4.4-.8 6.2-2.5 1.4-1.3 1.6-1.9 1.6-2.2 0-.5-.4-.9-.9-.9-.4 0-.6.3-1 .6-.7.7-2 2-4.4 2-4.3 0-6.6-4-6.6-8 0-.5.1-.7.1-.7.1.1.5.1.7.1zm4.7-6.6c.8 0 2 .2 2.8 1.1.5.6.8 1.4.8 2 0 .6-.3.9-.9 1.1-1 .3-3 .3-4.1.3h-3-.7c0-.5.5-1.6.8-2 1-1.6 2.6-2.5 4.3-2.5zM105.7 58.3c-1.9 0-3.2 1.5-3.9 2.5v-1.6c0-.2 0-.6-.3-.9-.1-.1-.3-.2-.6-.2-.5 0-.8.4-1 .6 0 0-.1.1-.1.2-.5.7-2 1.7-2.8 1.9h-.1c-.4.1-1.1.4-1.1 1.2 0 .5.4.9 1 .9h.5c.4 0 .6.1.6.1.1.1.2.4.2 2.1v8.5c0 1.6-.1 2-1.2 2.1h-.2c-.3 0-1.4.1-1.4 1.1 0 .5.3 1 1.1 1 .6 0 1.2 0 1.8-.1.6 0 1.1-.1 1.7-.1.5 0 1.1 0 1.6.1.6 0 1.2.1 1.8.1.6 0 1-.4 1-1 0-1-1-1.1-1.4-1.1h-.1c-1.1-.1-1.2-.5-1.2-2.1v-7.3c0-1.5 0-2.4.7-3.6.4-.5.9-1.2 1.4-1.2.2 0 .3.1.6.5s.8 1.1 1.8 1.1c1.2 0 2.1-.9 2.1-2.2.1-1.5-1-2.6-2.5-2.6zM117.2 65.5c-2-.7-3.7-1.4-3.7-3.2 0-1.6 1.7-2.5 2.8-2.5 2.3 0 2.9 1.4 3.3 2.5.3.6.5 1.3 1.2 1.3.2 0 .5-.1.6-.3.4-.5.4-1.3.3-2.2V61v-.4c0-.6.1-1.6-.8-2-1-.5-3-.7-4-.7-1.9 0-3.5.5-4.7 1.5-1.4 1.1-2.2 2.6-2.2 4.2 0 3.6 3.3 4.7 5.7 5.6l.3.1c2 .7 3.2 1.5 3.2 3.4 0 2.2-2 3.4-3.9 3.4-2.8 0-3.2-1.9-3.5-3.6-.2-1-.4-2-1.3-2s-1 1-1 1.3v.1l-.1 2.8v.2c0 .6 0 1.4.8 1.8 1.4.8 3.7 1.3 5 1.3 3.7 0 7.6-2.4 7.6-6.5 0-3.9-3-5-5.6-6zM131.8 53c0-1.2-.8-2.5-2.1-2.5-1.2 0-2.2 1.1-2.2 2.6s.9 2.5 2.1 2.5c1.4 0 2.2-1 2.2-2.6zM132.8 75.7h-.2c-1.1-.1-1.2-.5-1.2-2.1V59.2c0-.3 0-.6-.3-.9-.1-.1-.3-.2-.6-.2-.5 0-.8.4-1 .6 0 0-.1.1-.1.2-.5.7-2 1.7-2.8 1.9h-.1c-.4.1-1.1.4-1.1 1.2 0 .5.4.9 1 .9h.5c.4 0 .6.1.6.1.1.1.2.4.2 2.1v8.5c0 1.6-.1 2-1.2 2.1h-.2c-.3 0-1.4.1-1.4 1.1 0 .5.3 1 1.1 1 .6 0 1.2 0 1.8-.1.6 0 1.1-.1 1.7-.1.5 0 1.1 0 1.6.1.6 0 1.2.1 1.8.1.6 0 1-.4 1-1 .3-1-.7-1.1-1.1-1.1zM144.4 74c-.3 0-.5.2-.9.5-.4.4-1.1 1-1.8 1-.4 0-.6-.1-.9-.3-.7-.7-.7-2.6-.7-3.8V60.8v-.4H143.4c.4 0 .7 0 1-.2.3-.3.3-.6.3-1 0-.8-.3-1.1-.9-1.1h-3.6-.1V55c0-1-.7-1.1-.9-1.1-.4 0-.7.2-.9.7-.8 1.8-1.8 2.8-3.3 3.9l-.1.1c-.2.2-.6.5-.6 1 0 .2.1.5.3.6.4.3.9.3 1.4.3h.4V71.9c0 1.6 0 3.5.9 4.8.7.9 1.8 1.5 3.1 1.5 1.4 0 2.7-.6 3.8-1.7.3-.3.9-.9.9-1.6.1-.4-.2-.9-.7-.9zM164.5 58.5h-5.8c-.6 0-1.1.5-1.1 1.1 0 .9 1 .9 1.4.9 1.4 0 1.4.7 1.4.9 0 .4-.3 1-.4 1.4v.1c0 .1-2.4 6.3-3.6 9.3l-3.6-9.6v-.1c-.2-.4-.4-1-.4-1.4 0-.7 1.2-.7 1.3-.7 1.2 0 1.5-.5 1.5-.9 0-.7-.5-1.1-1.1-1.1H147c-.7 0-1.3.4-1.3 1.1 0 .9 1.1.9 1.5.9.8 0 1.2.8 1.6 2.1 0 0 .1.3.2.4l4.8 12.7c0 .1.1.3.2.4.1.4.3.8.3 1.1 0 .3-.1.5-.2.8 0 .1-.1.2-.1.2-1 2.5-1.2 3.1-1.2 3.2 0 .1-.1.2-.1.2v.1c-.2.4-.3.8-.5.8-.3.1-.8.1-1.2.1h-.3c-1.7 0-1.7 1.6-1.7 2.2 0 .6.2 1 .5 1.3.5.5 1.3.6 2 .6h.2c1.7 0 1.9-.6 2.3-1.9v-.1l6.2-16.4c.8-2.1 1.1-2.8 1.1-3.1.3-.8 1.3-3.3 1.9-4.2.3-.4.9-.7 1.2-.7h.2c.4 0 1.1-.1 1.1-.8-.1-.4-.6-.9-1.2-.9z" />
                        </g>
                        <path id="shieldoutline" class="shieldoutline" d="M234.8 49.6H174v46.1c1 11 12 29.3 30.2 34.9l.3.1.3.1.3.1.3-.1.3-.1.3-.1c18.2-5.6 29.2-24 30.2-35.2V49.8h-1.4zm-.5 1.9v44c-.9 10.7-11.6 28.3-29.2 33.8l-.3.1h-.2l-.3-.1c-17.6-5.4-28.3-23.1-29.2-33.7V51H234v.5z" />
                        <path id="shield" class="shield" d="M232.9 51.1h-57.6V95.7c.9 10.6 11.6 28.2 29.2 33.7l.3.1h.2l.3-.1c17.6-5.4 28.2-23.1 29.2-33.8V51.2h-1.6zm0 44.5c-.8 9.3-10.5 27-28.2 32.5-17.7-5.5-27.4-23.2-28.2-32.5v-27H232.8v27zm0-27h-56.4V52.5h56.4v16.1z" />
                        <g id="shieldbg">
                          <path class="shieldbg" d="M204.8 68.6H176.6v27c.8 9.3 10.5 27 28.2 32.5 17.7-5.5 27.4-23.2 28.2-32.5v-27h-28.2zm11.5 5.9s2.6 4.7.2 6.5c0 0 1.5-.2 2.8.5 0 0-.9 1.6-1.8 2.1 0 0 1.9.9 2.4 1.6 0 0-1.2 1-2.8 1.2 0 0 1.7 1.1 2.2 2 0 0-1.3.9-2.9.6 0 0 1.8 1.2 1.9 2.5 0 0-1.8.5-3.1-1 0 0 1.2 2 .5 3.3-.2.4-.7.8-.7.8-1.1-.6-1.3-.6-1.4-1.8 0-.6.1-.7.1-2 0-1.1-.2-2.1-.2-2.1s2.4-.4 1.8-4.6c0 0-3.2 2.2-3.6-.8-.5-3.6 5-1.7 4.6-8.8zm-2.9 35s-.1 0-.2.1c-.3.1-.5.4-.4 1.1 0 0-1-1.1.4-1.9l.1-.1c0 .1-.2.5.1.8zm-2-6.5s.3.8.4 1c.7 1.5-.3 3.6-.3 3.6.5-2.8-2.4-5.3-2.4-5.3.4-1.3 1.8-3.3 1.9-3.4 0 .1.1.4.8 1.5 2 3.2 3.8 3 3.8 3-1.7.8-4.2-.4-4.2-.4zm-.6-7.1c-3.6 6.4-6.2 7.3-1.2 11.7 0 0-3.2.9-4-1.9 0 0 .2 3.1-.6 3.9-.8-.8-.6-3.8-.6-3.8-.7 2.8-4 1.9-4 1.9 5-4.4 2.4-5.3-1.2-11.7-3.5-6.2.3-8.9 2-13.5.8-.1 2.1-.4 2.7-1.1 0 0 .3.5 1 .7.7-.2 1.1-.7 1.1-.7.5.6 2 1 2.7 1 1.8 4.6 5.6 7.4 2.1 13.5zm-12.1 11.7s-1-2-.3-3.6c.1-.1.4-1 .4-1s-2.5 1.2-4.2.3c0 0 1.8.2 3.8-3 .7-1.2.8-1.5.8-1.5.1.2 1.5 2.1 1.9 3.4 0 0-3 2.6-2.4 5.4zm-1.9 2.1c-.1 0-.2-.1-.2-.1.2-.3.1-.7.1-.7.1 0 .1.1.1.1 1.4.8.4 1.9.4 1.9.1-.9-.2-1.1-.4-1.2zm1.2-34.3c0 .3.4.9.7 1.1.5.4 4.7.1 5.2.1-.4-.8-2.3-2.3-3.3-2.2-1.1 0-1.4 1.1-1.4 1.1-.5-.5-.6-1.4.1-2.1.6-.6 3.5-.8 3.7-1 .1-.2.3-.6 1-.5.7.1 1.3 1.2 3.2.8 0 0 1.5-.1 1.2-1-.1-.4-1-.4-1-.4s1.9-.3 1.7 1.2c-.1 1.1-1.8 1-1.9 2.9 0 .3-.1 4.1 1.9 5.6 0 0-2.5-.2-3.5-2.8 0 0 0 1.9-.6 1.9s-.8-1.9-.8-1.9c-.2 2.5-3.1 2.3-3.1 2.3 2-.3 1.4-1.3 1.2-1.6-.3-.5-1.1-.2-1.4-.2-1.3.4-1.2-.5-1.2-.5h3.3c.9-.1.8-.9.9-1.2-.4 0-4.5.1-4.8.1-.3 0-.5 0-1-.3-.4-.3-.1-1.4-.1-1.4zm-4.2-.9c-.4 7.1 5.1 5.3 4.7 8.9-.4 3-3.6.8-3.6.8-.6 4.2 1.8 4.6 1.8 4.6s-.1 1-.2 2.1c0 1.3.1 1.4.1 2-.1 1.2-.3 1.3-1.4 1.8 0 0-.4-.4-.7-.8-.7-1.3.5-3.3.5-3.3-1.3 1.6-3.1 1-3.1 1 .1-1.3 1.9-2.5 1.9-2.5-1.6.3-2.9-.6-2.9-.6.5-.9 2.2-2 2.2-2-1.7-.1-2.8-1.2-2.8-1.2.5-.7 2.4-1.6 2.4-1.6-.9-.5-1.8-2.1-1.8-2.1 1.3-.7 2.8-.5 2.8-.5-2.5-1.9.1-6.6.1-6.6zM182.7 99s5.7 1.8 8-4c-3.8 3-6.3 2.7-7.4 2.2-1.5-.7-1.8-3-1.8-3 2.5 1.2 6.3-.7 8.3-3.1-5.3.8-7.5-.7-8.1-1.6-.9-1.4-1.7-3.8-1.7-3.8 1.4 1.4 6.2 3 8.9 1.5-5.5-2.7-7.9-3.6-8.4-4.9-.6-1.6-.6-4.2-.6-4.2 1 1.8 5.7 3.7 9.2 4.2-5.6-3.7-7.9-6.2-8-7.7-.2-1.7.2-4.3.2-4.3 1 2.9 9.6 7.5 9.6 7.5 0 .6-.1 1.2.1 1.8 0 0-1 .3-2.1 1.4 0 0 .5 1.5 1.1 2.3 0 0-1.3 1-1.7 1.9 0 0 .1.7 1.5 1.8 0 0-.4.4-1 1.7 0 0 .9.9 1.9 1.4 0 0-.5 1-.4 2.2 0 0 1.2 1.1 2.5 1.1 0 0 .1.8.9 1.8.3.4 1.4 1.3 1.4 1.3s1.9-.7 2.4-1.3l.1.3s.1.6.8 1.6c0 0-1.4 5.7-8.9 5.9 4.3-1.4 4.6-5.7 4.6-5.7-4.4 4.8-7.1 5.4-8.5 4.7-1.6-.7-2.9-3-2.9-3zm3.7 11.9s-1.5-1.4.2-2.8c0 0-.2.4.2 1-.1.1-1.1.5-.4 1.8zm.3-5.7s.2-1.5 1.9-.9c0 0-.4.2-.5.6 0 0-.9-.6-1.4.3zm2 7.6s0 .5.5.9c0 0-.8.7.3 1.7 0 0-2-.8-.8-2.6zm5.6-3.4c-.4-.3-1.2-.1-1.4 0-.5.2-.9.9-1.1 2.2-.3 1.7-1.6 1.9-2 1.5-1.3-1.3.6-2.5.9-2.7 1.1-.9 1-1.4.8-1.6-.3-.5-1.6-.5-2.5.2-.8.7-2.1.2-1.7-1 .3-1 1.7-.5 2-.5.2 0 .5.1.7-.2.2-.3-.3-.7-.6-.8-.5-.2-1-.8-.6-1.3.5-.6 1.4-.2 1.4.7 0 .4.2 1.2.7 1.5 1.6.7 3.7-2 3.7-2s.9.3 2 .2c0 0-.5 1.3-2.8 2.4-.5.3-.4.6-.1.8 0 0 .5.1.8 0 .5-.2 1.2-.4 1.4.4.2.8-.7 1.3-1.4.8.2-.3-.1-.5-.2-.6zm2.3 9.6c-3.7-4.2-.9-7 1.8-8.1 1.8-.8 1.7-1.3 1.7-1.3s2 .6 3.2-.1c0 0-.3.9-.9 1.8-3 4-5 2-5 2-2.4 1-.8 5.7-.8 5.7zm14.8.3c-1.1.9-2-1.6-2-1.6s-.1 2.3-2.1 2.4c0 0 3-1.8-.1-5.9.3 2.9-.7 5.6-2.1 5.6-1.4 0-2.4-2.7-2.1-5.6-3.1 4.1-.1 5.9-.1 5.9-2 0-2.1-2.4-2.1-2.4s-.9 2.5-2 1.6c-1.7-1.4 1.3-2.8 1.3-2.8-1.7-.1-2-1.1-2-1.1 4.4.5 6.3-4.1 6.3-4.1.3.3.5.3.7.4.2-.1.5-.2.7-.4 0 0 1.9 4.6 6.3 4.1 0 0-.3 1-2 1.1 0 .1 3 1.4 1.3 2.8zm2.1-.3s1.5-4.7-.8-5.8c0 0-2.1 2-5-2-.6-.8-.9-1.8-.9-1.8 1.2.8 3.2.1 3.2.1s-.1.6 1.7 1.3c2.7 1.2 5.5 4.1 1.8 8.2zm7.1-3.6c1.1-1 .3-1.7.3-1.7.6-.5.5-.9.5-.9 1.1 1.8-.8 2.6-.8 2.6zm.4-6.5c-.8-.7-2.1-.7-2.5-.2-.1.2-.3.8.8 1.6.4.3 2.3 1.5.9 2.7-.5.4-1.7.3-2-1.5-.2-1.3-.6-1.9-1.1-2.2-.2-.1-1-.3-1.4 0-.1.1-.4.3-.4.3-.7.5-1.6-.1-1.4-.8.2-.9.9-.7 1.4-.4.4.2.8 0 .8 0 .3-.2.4-.5-.1-.8-2.3-1.1-2.8-2.4-2.8-2.4 1.1.1 2-.2 2-.2s2.1 2.8 3.7 2c.5-.2.7-1.1.7-1.5 0-.8.9-1.3 1.4-.7.5.6-.1 1.1-.6 1.3-.3.1-.7.5-.6.8.2.3.4.2.7.2.3 0 1.7-.5 2 .5.7 1.4-.7 2-1.5 1.3zm1-4c-.1-.4-.5-.6-.5-.6 1.7-.6 1.9.9 1.9.9-.6-.9-1.4-.3-1.4-.3zm1.7 6c.7-1.3-.3-1.7-.3-1.7.4-.6.2-1 .2-1 1.6 1.3.1 2.7.1 2.7zm6.4-25.2s-.8 2.3-1.7 3.8c-.6.9-2.8 2.4-8.1 1.6 2 2.4 5.7 4.3 8.3 3.1 0 0-.3 2.3-1.8 3-1.1.5-3.6.8-7.4-2.2 2.3 5.7 8 4 8 4s-1.3 2.3-2.8 3.1c-1.3.7-4 .1-8.5-4.7 0 0 .3 4.3 4.6 5.7-7.6-.2-8.9-5.9-8.9-5.9.7-1.1.8-1.6.8-1.6l.1-.3c.5.5 2.4 1.3 2.4 1.3s1.1-1 1.4-1.3c.7-1.1.9-1.8.9-1.8 1.3 0 2.5-1.1 2.5-1.1.1-1.2-.4-2.2-.4-2.2.9-.4 1.9-1.4 1.9-1.4-.6-1.3-1-1.7-1-1.7 1.5-1.1 1.5-1.8 1.5-1.8-.4-1-1.7-1.9-1.7-1.9.6-.8 1.1-2.3 1.1-2.3-1.1-1.1-2.1-1.4-2.1-1.4.2-.6.1-1.2.1-1.8 0 0 8.7-4.5 9.6-7.5 0 0 .4 2.6.2 4.3-.1 1.5-2.5 3.9-8 7.7 3.4-.5 8.1-2.4 9.2-4.2 0 0 0 2.7-.6 4.2-.5 1.3-2.9 2.2-8.4 4.9 2.7 1.4 7.4-.2 8.8-1.6z" />
                          <path class="shieldbg" d="M211.1 90.1c-.4-.8-.9-1.1-1.3-1.2-.1-.1-.1-.2-.2-.4-.5-.8-1.4-.9-2.1-.6-.2.1-.4.2-.5.2l.1-.2c.1-.1.2-.3.3-.6.2-.6.1-1.5-.6-2.1-.1-.1-.2-.1-.4-.2-.1-.4-.4-.9-1.2-1.3l-.2-.1-.2.1c-.8.4-1.1.9-1.2 1.3-.1 0-.2.1-.4.2-.8.5-.9 1.4-.6 2.1.1.4.2.5.3.6l.2.2c-.1-.1-.3-.1-.5-.2-.6-.2-1.5-.1-2.1.6-.1.1-.1.2-.2.4-.4.1-.9.4-1.3 1.2l-.1.2.1.2c.4.8.9 1.1 1.3 1.2 0 .1.1.2.2.4.5.8 1.4.9 2.1.6.4-.1.5-.2.6-.3l.2-.2v2.1l-.2-.2-.3.4c-.1.1-.2.3-.3.6-.2.6-.1 1.5.6 2.1.1.1.2.1.4.2.1.4.4.9 1.2 1.3l.2.1.2-.1c.8-.4 1.1-.9 1.2-1.3.1 0 .2-.1.4-.2.8-.5.9-1.4.6-2.1-.1-.4-.2-.5-.3-.6l-.3-.4-.2.2v-2.1l.2.2c.1.1.3.2.6.3.6.2 1.5.1 2.1-.6.1-.1.1-.2.2-.4.4-.1.9-.4 1.3-1.2l.1-.2v-.2zm-1.2.3s-.1 0 0 0c0 .1-.5.7-1.1.5.1.2.1.4-.1.7-.3.4-.7.3-.8.3h-.1l.1-.1s.1-.1.1-.2 0-.3-.3-.5c-.1-.1-.4-.1-.6-.1h-1.5v4c0 .1 0 .5.1.6.2.2.4.3.5.3.1 0 .2-.1.2-.1l.1-.1v.1c.1.2.1.6-.3.8-.3.2-.5.1-.7.1.2.6-.5 1.1-.5 1.1s-.6-.5-.5-1.1c-.2.1-.4.1-.7-.1-.4-.3-.3-.7-.3-.8v-.1l.1.1s.1.1.2.1.3 0 .5-.3c.1-.1.1-.4.1-.6v-4h-1.6c-.1 0-.4 0-.6.1-.2.2-.3.4-.2.5 0 .1.1.2.1.2l.1.1h-.1c-.2.1-.6.1-.8-.3-.2-.3-.1-.5-.1-.7-.6.2-1.1-.5-1.1-.5s.5-.6 1.1-.5c-.1-.2-.1-.4.1-.7.3-.4.7-.3.8-.3h.1l-.1.1s-.1.1-.1.2 0 .3.2.5c.1.1.5.1.6.1h1.6v-2.2c0-.1 0-.4-.1-.6-.2-.2-.4-.3-.5-.3-.1 0-.2.1-.2.1l-.1.1v-.1c-.1-.2-.1-.6.3-.8.3-.2.5-.1.7-.1-.2-.6.5-1.1.5-1.1s.6.5.5 1.1c.2-.1.4-.1.7.1.4.3.3.7.3.8v.1l-.1-.1s-.1-.1-.2-.1-.3 0-.5.3c-.1.1-.1.5-.1.6v2.2h1.5c.1 0 .5 0 .6-.1.2-.2.3-.4.3-.5 0-.1-.1-.2-.1-.2l-.1-.1h.1c.2-.1.6-.1.8.3.2.3.1.5.1.7.6-.2 1 .4 1.1.5zM204.2 74c0-.1 0-.2-.1-.3h.5v-.1l-.1-.5V73h-.1l-2.3.9 1.3-.1c0 .1-.1.2-.1.2 0 .3.2.5.5.5.2.1.4-.2.4-.5z" />
                        </g>
                        <g id="eagle">
                          <path class="eagle" d="M202.4 111.2c.6-.8.9-1.8.9-1.8-1.2.8-3.2.1-3.2.1s.1.6-1.7 1.3c-2.7 1.1-5.5 4-1.8 8.1 0 0-1.5-4.7.8-5.8 0 .1 2.1 2.1 5-1.9zM193.6 80.9s-1.5-.2-2.8.5c0 0 .9 1.6 1.8 2.1 0 0-1.9.9-2.4 1.6 0 0 1.2 1 2.8 1.2 0 0-1.7 1.1-2.2 2 0 0 1.3.9 2.9.6 0 0-1.8 1.2-1.9 2.5 0 0 1.8.5 3.1-1 0 0-1.2 2-.5 3.3.2.4.7.8.7.8 1.1-.6 1.3-.6 1.4-1.8 0-.6-.1-.7-.1-2 0-1.1.2-2.1.2-2.1s-2.4-.4-1.8-4.6c0 0 3.2 2.2 3.6-.8.4-3.6-5.1-1.8-4.7-8.9.1.2-2.5 4.9-.1 6.6z" />
                          <path class="eagle" d="M194 97.4s-.3 4.3-4.6 5.7c7.6-.2 8.9-5.9 8.9-5.9-.7-1.1-.8-1.6-.8-1.6l-.1-.3c-.5.5-2.4 1.3-2.4 1.3s-1.1-1-1.4-1.3c-.7-1.1-.9-1.8-.9-1.8-1.3 0-2.5-1.1-2.5-1.1-.1-1.2.4-2.2.4-2.2-.9-.4-1.9-1.4-1.9-1.4.6-1.3 1-1.7 1-1.7-1.5-1.1-1.5-1.8-1.5-1.8.4-1 1.7-1.9 1.7-1.9-.6-.8-1.1-2.3-1.1-2.3 1.1-1.1 2.1-1.4 2.1-1.4-.2-.6-.1-1.2-.1-1.8 0 0-8.7-4.5-9.6-7.5 0 0-.4 2.6-.2 4.3.1 1.5 2.5 3.9 8 7.7-3.4-.5-8.1-2.4-9.2-4.2 0 0 0 2.7.6 4.2.5 1.3 2.9 2.2 8.4 4.9-2.7 1.5-7.5-.2-8.9-1.5 0 0 .8 2.3 1.7 3.8.6.9 2.8 2.4 8.1 1.6-2 2.4-5.7 4.3-8.3 3.1 0 0 .3 2.3 1.8 3 1.1.5 3.6.8 7.4-2.2-2.3 5.7-8 4-8 4s1.3 2.3 2.8 3.1c1.5.6 4.2 0 8.6-4.8zM201.1 102.2c-.4-1.3-1.8-3.3-1.9-3.4 0 .1-.1.4-.8 1.5-2 3.2-3.8 3-3.8 3 1.7.9 4.2-.3 4.2-.3s-.3.8-.4 1c-.7 1.5.3 3.6.3 3.6-.6-2.8 2.4-5.4 2.4-5.4zM199.1 98.8s.1 0 0 0c.1 0 0 0 0 0z" />
                          <path class="eagle" d="M196.1 108.9c-.2-.9-.9-.7-1.4-.4-.4.2-.8 0-.8 0-.3-.2-.4-.5.1-.8 2.3-1.1 2.8-2.4 2.8-2.4-1.1.1-2-.2-2-.2s-2.1 2.8-3.7 2c-.5-.2-.7-1.1-.7-1.5 0-.8-.9-1.3-1.4-.7-.5.6.1 1.1.6 1.3.3.1.7.5.6.8-.2.3-.4.2-.7.2-.3 0-1.7-.5-2 .5-.4 1.2 1 1.7 1.7 1 .8-.7 2.1-.7 2.5-.2.1.2.3.8-.8 1.6-.4.3-2.3 1.5-.9 2.7.5.4 1.7.3 2-1.5.2-1.3.6-1.9 1.1-2.2.2-.1 1-.3 1.4 0 .1.1.4.3.4.3.5.8 1.4.2 1.2-.5zM188.1 104.9c.1-.4.5-.6.5-.6-1.7-.6-1.9.9-1.9.9.5-.9 1.4-.3 1.4-.3zM186.5 108.2c-1.7 1.3-.2 2.8-.2 2.8-.7-1.3.3-1.7.3-1.7-.2-.7-.1-1.1-.1-1.1zM189.2 113.7c-.6-.5-.5-.9-.5-.9-1.1 1.8.8 2.6.8 2.6-1.1-1-.3-1.7-.3-1.7zM196.8 108.9l-.1-.1s.2.4-.1.7c0 0 .1 0 .2.1.3.1.5.4.4 1.1 0 .1 1-1-.4-1.8zM213.2 108.9c-1.4.8-.4 1.9-.4 1.9-.1-.7.1-1 .4-1.1.1 0 .2-.1.2-.1-.2-.3-.1-.7-.1-.7 0-.1-.1-.1-.1 0zM211.7 110.9c-1.8-.8-1.7-1.3-1.7-1.3s-2 .6-3.2-.1c0 0 .3.9.9 1.8 3 4 5 2 5 2 2.4 1.1.8 5.8.8 5.8 3.7-4.2.9-7.1-1.8-8.2zM215.2 84.2c.6 4.2-1.8 4.6-1.8 4.6s.1 1 .2 2.1c0 1.3-.1 1.4-.1 2 .1 1.2.3 1.3 1.4 1.8 0 0 .4-.4.7-.8.7-1.3-.5-3.3-.5-3.3 1.3 1.6 3.1 1 3.1 1-.1-1.3-1.9-2.5-1.9-2.5 1.6.3 2.9-.6 2.9-.6-.5-.9-2.2-2-2.2-2 1.7-.1 2.8-1.2 2.8-1.2-.5-.7-2.4-1.6-2.4-1.6.9-.5 1.8-2.1 1.8-2.1-1.3-.7-2.8-.5-2.8-.5 2.4-1.7-.2-6.5-.2-6.5.4 7.1-5.1 5.3-4.7 8.9.4 2.9 3.7.7 3.7.7z" />
                          <path class="eagle" d="M228.5 89.5c.9-1.4 1.7-3.8 1.7-3.8-1.4 1.4-6.2 3-8.9 1.5 5.5-2.7 7.9-3.6 8.4-4.9.6-1.6.6-4.2.6-4.2-1 1.8-5.7 3.7-9.2 4.2 5.6-3.7 7.9-6.2 8-7.7.2-1.7-.2-4.3-.2-4.3-1 2.9-9.6 7.5-9.6 7.5 0 .6.1 1.2-.1 1.8 0 0 1 .3 2.1 1.4 0 0-.5 1.5-1.1 2.3 0 0 1.3 1 1.7 1.9 0 0-.1.7-1.5 1.8 0 0 .4.4 1 1.7 0 0-.9.9-1.9 1.4 0 0 .5 1 .4 2.2 0 0-1.2 1.1-2.5 1.1 0 0-.1.8-.9 1.8-.3.4-1.4 1.3-1.4 1.3s-1.9-.7-2.4-1.3l-.1.3s-.1.6-.8 1.6c0 0 1.4 5.7 8.9 5.9-4.3-1.4-4.6-5.7-4.6-5.7 4.4 4.8 7.1 5.4 8.5 4.7 1.5-.8 2.8-3.1 2.8-3.1s-5.7 1.8-8-4c3.8 3 6.3 2.7 7.4 2.2 1.5-.7 1.8-3 1.8-3-2.5 1.2-6.3-.7-8.3-3.1 5.3.9 7.6-.6 8.2-1.5zM210.9 98.8s.1 0 0 0c.1 0 0 0 0 0zM215.6 103.3s-1.8.2-3.8-3c-.7-1.2-.8-1.5-.8-1.5-.1.2-1.5 2.1-1.9 3.4 0 0 2.9 2.5 2.4 5.3 0 0 1-2 .3-3.6-.1-.1-.4-1-.4-1s2.5 1.3 4.2.4z" />
                          <path class="eagle" d="M220.7 107.3c-.2 0-.5.1-.7-.2-.2-.3.3-.7.6-.8.5-.2 1-.8.6-1.3-.5-.6-1.4-.2-1.4.7 0 .4-.2 1.2-.7 1.5-1.6.7-3.7-2-3.7-2s-.9.3-2 .2c0 0 .5 1.3 2.8 2.4.5.3.4.6.1.8 0 0-.5.1-.8 0-.5-.2-1.2-.4-1.4.4-.2.8.7 1.3 1.4.8 0 0 .3-.2.4-.3.4-.3 1.2-.1 1.4 0 .5.2.9.9 1.1 2.2.3 1.7 1.6 1.9 2 1.5 1.3-1.3-.6-2.5-.9-2.7-1.1-.9-1-1.4-.8-1.6.3-.5 1.6-.5 2.5.2.8.7 2.1.2 1.7-1-.5-1.2-1.8-.7-2.2-.8zM221.5 104.3s.4.2.5.6c0 0 .8-.6 1.4.3 0 0-.1-1.5-1.9-.9zM223.5 108.2s.2.4-.2 1c0 0 1 .4.3 1.7.1 0 1.6-1.4-.1-2.7zM220.9 113.7s.8.7-.3 1.7c0 0 1.9-.8.8-2.6 0 0 .1.4-.5.9zM212.1 115.5c-4.4.5-6.3-4.1-6.3-4.1-.3.3-.5.3-.7.4-.2-.1-.5-.2-.7-.4 0 0-1.9 4.6-6.3 4.1 0 0 .3 1 2 1.1 0 0-3 1.4-1.3 2.8 1.1.9 2-1.6 2-1.6s.1 2.3 2.1 2.4c0 0-3-1.8.1-5.9-.3 2.9.7 5.6 2.1 5.6 1.4 0 2.4-2.7 2.1-5.6 3.1 4.1.1 5.9.1 5.9 2 0 2.1-2.4 2.1-2.4s.9 2.5 2 1.6c1.7-1.4-1.3-2.8-1.3-2.8 1.7-.2 2-1.1 2-1.1zM199.2 77.1c.3 0 4.3-.1 4.8-.1-.1.3 0 1.1-.9 1.2h-3.3s-.1.8 1.2.5c.3-.1 1.1-.3 1.4.2.2.3.8 1.4-1.2 1.6 0 0 2.9.2 3.1-2.3 0 0 .2 1.8.8 1.9.6 0 .6-1.9.6-1.9 1 2.6 3.5 2.8 3.5 2.8-2.1-1.4-2-5.3-1.9-5.6.1-1.9 1.8-1.7 1.9-2.9.2-1.6-1.7-1.2-1.7-1.2s.8 0 1 .4c.3.9-1.2 1-1.2 1-1.9.5-2.5-.6-3.2-.8-.7-.1-.8.3-1 .5-.1.2-3.1.3-3.7 1-.7.7-.6 1.6-.1 2.1 0 0 .3-1 1.4-1.1 1.1 0 2.9 1.4 3.3 2.2-.5 0-4.6.3-5.2-.1-.3-.3-.7-.8-.7-1.1 0 0-.2 1.1.3 1.4.4.4.5.3.8.3zm4.5-2.5c-.3 0-.5-.2-.5-.5 0-.1 0-.2.1-.2l-1.3.1 2.3-.9h.1v.1l.1.5v.1h-.5c.1.1.1.2.1.3.1.2-.1.5-.4.5zM208.8 82.5c-.7-.1-2.2-.4-2.7-1 0 0-.3.5-1.1.7-.7-.2-1-.7-1-.7-.6.6-1.9 1-2.7 1.1-1.7 4.5-5.5 7.3-2 13.5 3.6 6.4 6.2 7.3 1.2 11.7 0 0 3.2.9 4-1.9 0 0-.1 3 .6 3.8.8-.8.6-3.9.6-3.9.7 2.8 4 1.9 4 1.9-5-4.4-2.4-5.3 1.2-11.7 3.4-6.2-.4-9-2.1-13.5zm1 9.3c0 .1-.1.2-.2.4-.5.8-1.4.9-2.1.6-.4-.1-.5-.2-.6-.3l-.2-.2v2.1l.2-.2.3.4c.1.1.2.3.3.6.2.6.1 1.5-.6 2.1-.1.1-.2.1-.4.2-.1.4-.4.9-1.2 1.3l-.2.1-.2-.1c-.8-.4-1.1-.9-1.2-1.3-.1 0-.2-.1-.4-.2-.8-.5-.9-1.4-.6-2.1.1-.4.2-.5.3-.6l.3-.4.2.2v-2.1l-.2.2c-.1.1-.3.2-.6.3-.6.2-1.5.1-2.1-.6-.1-.1-.1-.2-.2-.4-.4-.1-.9-.4-1.3-1.2l-.1-.2.1-.2c.4-.8.9-1.1 1.3-1.2 0-.1.1-.2.2-.4.5-.8 1.4-.9 2.1-.6.2.1.4.2.5.2l-.2-.2c-.1-.1-.2-.3-.3-.6-.2-.6-.1-1.5.6-2.1.1-.1.2-.1.4-.2.1-.4.4-.9 1.2-1.3l.2-.1.2.1c.8.4 1.1.9 1.2 1.3.1 0 .2.1.4.2.8.5.9 1.4.6 2.1-.1.4-.2.5-.3.6l-.1.2c.1-.1.2-.1.5-.2.6-.2 1.5-.1 2.1.6.1.1.1.2.2.4.4.1.9.4 1.3 1.2l.1.2-.1.2c-.5.8-1 1.1-1.4 1.2z" />
                          <path class="eagle" d="M208.7 89.8c.1-.2.1-.4-.1-.7-.3-.4-.7-.3-.8-.3h-.1l.1.1s.1.1.1.2 0 .3-.3.5c-.1.1-.5.1-.6.1h-1.5v-2.2c0-.1 0-.5.1-.6.2-.2.4-.3.5-.3.1 0 .2.1.2.1l.1.1v-.1c.1-.2.1-.6-.3-.8-.3-.2-.5-.1-.7-.1.2-.6-.5-1.1-.5-1.1s-.6.5-.5 1.1c-.2-.1-.4-.1-.7.1-.4.3-.3.7-.3.8v.1l.1-.1s.1-.1.2-.1.3 0 .5.3c.1.1.1.4.1.6v2.2h-1.6c-.1 0-.5 0-.6-.1-.2-.2-.3-.4-.2-.5 0-.1.1-.2.1-.2l.1-.1h-.1c-.2-.1-.6-.1-.8.3-.2.3-.1.5-.1.7-.6-.2-1.1.5-1.1.5s.5.6 1.1.5c-.1.2-.1.4.1.7.3.4.7.3.8.3h.1l-.1-.1s-.1-.1-.1-.2 0-.3.2-.5c.1-.1.4-.1.6-.1h1.6v4c0 .1 0 .4-.1.6-.2.2-.4.3-.5.3-.1 0-.2-.1-.2-.1l-.1-.1v.1c-.1.2-.1.6.3.8.3.2.5.1.7.1-.2.6.5 1.1.5 1.1s.6-.5.5-1.1c.2.1.4.1.7-.1.4-.3.3-.7.3-.8v-.1l-.1.1s-.1.1-.2.1-.3 0-.5-.3c-.1-.1-.1-.5-.1-.6v-4h1.5c.1 0 .4 0 .6.1.2.2.3.4.3.5 0 .1-.1.2-.1.2l-.1.1h.1c.2.1.6.1.8-.3.2-.3.1-.5.1-.7.6.2 1.1-.5 1.1-.5s-.4-.6-1.1-.5z" />
                        </g>
                        <path class="shieldheader" d="M176.5 52.5v16.1h56.4V52.5h-56.4zm12.1 10.9l-2.5-.2s-.2.8-.2 1.8c0 .7.4.9.6 1h-1.7c.2-.1.6-.3.6-1 .1-1-.2-1.8-.2-1.8l-2.5.2.5-.8-2.6-2.4.7-.2-.4-1.7 1.6.3.3-.8 1.1 1.3-.3-3 .9.8 1.1-2.1 1.1 2.1.9-.8-.3 3 1.1-1.3.3.8 1.6-.3-.4 1.7.7.2-2.6 2.4.6.8zm26.1 2.9h-8.1s-.6-1.3-1.8-1.3c-1.2 0-1.8 1.3-1.8 1.3h-8V57h1.6v-1.4h1.2s1.8.1 2.7-.3c.9-.4 3.3-1.2 4.4.4 1.1-1.6 3.4-.8 4.4-.4.9.4 2.7.3 2.7.3h1.2V57h1.6v9.3zm11.8-2.9l-2.5-.2s-.3.8-.2 1.8c0 .7.4.9.6 1h-1.7c.2-.1.6-.3.6-1 0-1-.2-1.8-.2-1.8l-2.5.2.5-.8-2.6-2.4.7-.2-.4-1.7 1.6.3.3-.8 1.1 1.3-.3-3 .9.8 1.1-2.1 1.1 2.1.9-.8-.3 3 1.1-1.3.3.8 1.6-.3-.4 1.7.7.2-2.6 2.4.6.8z" id="bookspine" />
                        <path class="bookbg" d="M213.8 57h-.7v7.9h-3c-1-.1-4.1-2-5.2-.8-1.1-1.2-4.2.7-5.2.8-.5.1-3 0-3 0V57H195v9.3h8.1s.6-1.3 1.8-1.3c1.2 0 1.8 1.3 1.8 1.3h8.1V57h-1z" id="bookbg" />
                        <g id="bookoutline">
                          <path class="bookoutline" d="M211.9 55.6s-1.8.1-2.7-.3c-.8-.3-2.6-.9-3.8-.2v1.2l.1-.1c.7-1 2.2-.6 3.4-.1 1 .4 2.8.4 3 .3h.4V64.1h-2.1c-.2 0-.7-.2-1.1-.4h-.1c-1.1-.4-2.4-.9-3.6-.8v.9c1.4-.4 3.8 1 4.7 1.1.5.1 3 0 3 0v-9.3h-1.2zM200.6 63.7c-.4.2-.9.4-1.1.4h-2.1V56.4h.4c.1 0 1.9.1 3-.3 1.2-.5 2.7-.8 3.4.1 0 0 0 .1.1.1v-1.2c-1.2-.8-3-.2-3.8.2-.9.4-2.7.3-2.7.3h-1.2v9.3h3c.9-.1 3.3-1.5 4.6-1.1V63c-1.1-.3-2.5.3-3.6.7z" />
                        </g>
                        <path class="bookspine" d="M205.4 57v-1.9c-.2.1-.4.3-.6.6-.2-.3-.4-.4-.6-.6V63.7l.6.3c.2-.2.4-.3.6-.3V57z" id="bookspine_1_" />
                        <g id="books">
                          <path class="books" d="M200.8 56c-1.1.4-2.9.4-3 .3h-.4v7.8h2.1c.2 0 .7-.2 1.1-.4 1.1-.4 2.5-.9 3.6-.8V56.3c0-.1-.1-.1-.1-.1-.6-1-2.1-.6-3.3-.2zM211.9 56.4c-.2 0-2 .1-3-.3-1.2-.5-2.7-.8-3.4.1l-.1.1V62.9c1.1-.2 2.5.3 3.6.8h.1c.4.2.9.4 1.1.4h2.1V56.4h-.4z" />
                        </g>
                        <g id="leaves">
                          <g id="leafs">
                            <path class="leaves" d="M189.9 60l.4-1.7-1.6.3-.3-.8-1.1 1.3.3-3-.9.8-1.1-2.1-1.1 2.1-.9-.8.3 3-1.1-1.3-.3.8-1.6-.3.4 1.7-.7.2 2.6 2.4-.5.8 2.5-.2s.3.8.2 1.8c0 .7-.4.9-.6 1h1.7c-.2-.1-.6-.3-.6-1 0-1 .2-1.8.2-1.8l2.5.2-.5-.8 2.6-2.4-.8-.2zM226.5 63.4l-.5-.8 2.6-2.4-.7-.2.4-1.7-1.6.3-.3-.8-1.1 1.3.3-3-.9.8-1.1-2.1-1.1 2.1-.9-.8.3 3-1.1-1.3-.3.8-1.6-.3.4 1.7-.7.2 2.6 2.4-.5.8 2.5-.2s.2.8.2 1.8c0 .7-.4.9-.6 1h1.7c-.2-.1-.6-.3-.6-1-.1-1 .2-1.8.2-1.8l2.4.2z" />
                          </g>
                        </g>
                      </svg>
                    </a>
                </footer>

            </div><!-- /site-footer -->

        </div><!-- /container -->

        <?php wp_footer(); ?>
    </body>
</html>
