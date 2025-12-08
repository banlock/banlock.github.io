    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="footer-title">
                        <i class="bi bi-heart-pulse"></i> YENDIELI CHILDREN
                    </h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;">
                        Association à but non lucratif dédiée à l'amélioration de la santé des enfants au Burkina Faso.
                        Ensemble, construisons l'espoir.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="footer-title">L'Association</h4>
                    <ul class="footer-links">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Notre mission</a></li>
                        <li><a href="#">Notre équipe</a></li>
                        <li><a href="#">Nos partenaires</a></li>
                        <li><a href="#">Transparence</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="footer-title">Le Projet</h4>
                    <ul class="footer-links">
                        <li><a href="#">Présentation</a></li>
                        <li><a href="#">Avancement</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Rapports</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="footer-title">S'Engager</h4>
                    <ul class="footer-links">
                        <li><a href="#don">Faire un don</a></li>
                        <li><a href="#">Bénévolat</a></li>
                        <li><a href="#">Partenariat</a></li>
                        <li><a href="#">Emplois</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="footer-title">Légal</h4>
                    <ul class="footer-links">
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Confidentialité</a></li>
                        <li><a href="#">CGU</a></li>
                        <li><a href="#">Espace presse</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 mx-auto">
                    <div class="newsletter-box">
                        <h4 class="text-center mb-3" style="font-weight: 600;">Restez Informés</h4>
                        <p class="text-center mb-3" style="font-size: 0.95rem;">Inscrivez-vous à notre newsletter pour
                            suivre l'avancement du projet</p>
                        <form>
                            <input type="email" class="newsletter-input" placeholder="Votre adresse email" required>
                            <button type="submit" class="newsletter-btn">
                                <i class="fas fa-envelope"></i> S'inscrire
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 YENDIELI CHILDREN. Tous droits réservés. | Fait avec <i class="fas fa-heart"
                        style="color: #ff6b6b;"></i> pour les enfants du Burkina Faso</p>
            </div>
        </div>
    </footer>

    <!-- Floating Donate Button -->
    <a href="#don" class="btn btn-donate-nav"
        style="position: fixed; bottom: 30px; right: 30px; z-index: 1000; padding: 1rem 1.5rem; box-shadow: 0 5px 25px rgba(0,102,204,0.4);">
        <i class="fas fa-heart"></i> Faire un Don
    </a>


    
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 5px 20px rgba(0,0,0,0.15)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Progress bar animation
        window.addEventListener('load', function () {
            const progressFill = document.querySelector('.progress-fill');
            if (progressFill) {
                setTimeout(() => {
                    progressFill.style.width = '25%';
                }, 500);
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.mission-card, .news-card, .stat-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Close navbar on mobile after clicking link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function () {
                const navbarToggler = document.querySelector('.navbar-toggler');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    navbarToggler.click();
                }
            });
        });
    </script>


    <script>
        AOS.init();
    </script>


    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>

    <script>
        let up = document.querySelector('.up');
        window.onscroll = function () {
            up.classList.toggle('show', window.scrollY >= 1000);
        }
        up.onclick = function () {
            window.scrollTo({ behavior: 'smooth', top: 0 });
        }
    </script>


    <script>
        // Changement du background en scroll
        const navbar = document.querySelector('.custom-navbar');
        const nav_link = document.querySelectorAll('.nav-link');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                navbar.classList.add('navbar-scrolled');
                nav_link.forEach(element => {
                    element.style.color = "rgb(224, 167, 179)";
                });
            } else {
                navbar.classList.remove('navbar-scrolled');
                nav_link.forEach(element => {
                    element.style.color = "rgb(34, 1, 8)";
                });
            }
        });
    </script>

<script>
        $(document).ready(function() {
            // Gestion de la sélection des options de don
            $('.donation-option').click(function() {
                $('.donation-option').removeClass('selected');
                $('.donation-option button').removeClass('btn-primary-custom').addClass('btn-outline-primary-custom').text('Sélectionner');
                
                $(this).addClass('selected');
                $(this).find('button').removeClass('btn-outline-primary-custom').addClass('btn-primary-custom').text('Sélectionné');
                
                // Si ce n'est pas un montant personnalisé, on remplit le champ
                if ($(this).data('amount') !== 'custom' && $(this).data('amount') !== 'monthly') {
                    $('#customAmount').val($(this).data('amount'));
                }
                
                // Si c'est un don mensuel, on coche la case
                if ($(this).data('amount') === 'monthly') {
                    $('#monthlyDonation').prop('checked', true);
                    $('#customAmount').val('25');
                }
            });
            
            // Gestion du formulaire de don
            $('#donationForm').submit(function(e) {
                e.preventDefault();
                
                // Validation basique
                const amount = $('#customAmount').val();
                if (!amount || amount < 1) {
                    alert('Veuillez saisir un montant valide.');
                    return;
                }
                
                // Simulation d'envoi du formulaire
                alert(`Merci pour votre don de ${amount}€ ! Vous allez être redirigé vers la page de paiement.`);
                // Ici, vous redirigeriez vers le système de paiement
            });
        });
    </script>


</body>
</html>