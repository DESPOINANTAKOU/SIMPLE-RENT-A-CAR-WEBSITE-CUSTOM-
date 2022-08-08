class myHeader extends HTMLElement {
    connectedCallback(){
        this.innerHTML = `
            <header> 
                <nav class="header-nav">
                    <ul>
                        <li><a href = "index.html"> Ποιοί Είμαστε? </a></li>
                        <li><a href = "ourProfile.html"> Οι Υπηρεσίες μας </a></li>
                        <li><a href = "interface4.html"> Φόρμα Εισαγωγής Στοιχείων </a></li>
                         <li><a href = "interface6.html">  Login Σελίδα </a></li>
                         <li><a href = "interface5.html">  Επικοινωνία </a></li>
                     </ul>
                </nav>
            </header>
        `
    }
}

customElements.define("my-header", myHeader);
