class myFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer class="footer">
            <div class="footer-main-div">
                <div class="newsletter">
                    <h2 class="newsletter-h2"> Εγγραφείτε στο Newsletter μας!</h2>
                    <form class="newsletter-form" method="post" action="newsletter.php">
                        <h4 class="newsletter-h4">ΦΟΡΜΑ ΕΓΓΡΑΦΗΣ</h4>
                        <input id="name1" name="name" type="text" placeholder="Παρακαλώ δώστε το username σας" required/>
                        <input id="name2" name="name" type="text" placeholder="Παρακαλώ δώστε το ονοματεπώνυμο σας" required/>
                        <input id="email12" name="email"  type="text" placeholder="Παρακαλώ δώστε το email σας"  required/>
                        <button class="newsletter-submit" type="submit">Εγγραφή</button>
                    </form>
                </div>
                <div class="communication-div">
                    <h3 class="footer-h3">ΕΠΙΚΟΙΝΩΝΙΑ</h3>
                    <div class="Div">
                        <i id='location' class='fas fa-map-marker-alt icon'> <a href="https://www.w3schools.com/">Ευελπίδων 500, Καλαμάκι</a></i>
                        <i id="telephone" class="fa fa-phone icon" aria-hidden="true"> <a href="tel:+18881235467" > 210 44444444</a></i>
                       <i id="emailsos" class="fa fa-envelope icon" aria-hidden="true"><a href="mailto: example@gmail.com">car-renting@yahoo.com</a></i>
                    </div>
                </div>  
                <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12586.102080772627!2d23.6528681!3d37.9415137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e0dce8e58812705!2zzqDOsc69zrXPgM65z4PPhM6uzrzOuc6_IM6gzrXOuc-BzrHOuc-Oz4I!5e0!3m2!1sel!2sgr!4v1656007704921!5m2!1sel!2sgr" 
                width="600" height="450" style="border:0;" class="footer-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
        `
    }
}
customElements.define("my-footer", myFooter);