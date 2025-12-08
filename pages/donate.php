<?php require '../inc/header.php' ?>


  <!-- Hero Section -->
    <section class="hero-donate">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Votre don change des vies</h1>
                    <p class="lead mb-4">Aidez-nous à construire et équiper un hôpital humanitaire au Burkina Faso pour offrir des soins de santé accessibles à tous.</p>
                    <a href="#donation-form" class="btn btn-secondary-custom btn-lg">Faire un don maintenant</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">L'impact de votre don</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="impact-card text-center">
                        <div class="impact-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h4>Soins médicaux</h4>
                        <p>Votre don permet d'offrir des consultations, des médicaments et des soins essentiels aux populations défavorisées.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="impact-card text-center">
                        <div class="impact-icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h4>Santé maternelle</h4>
                        <p>Financez des soins prénatals, des accouchements sécurisés et des soins postnataux pour les mères et leurs bébés.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="impact-card text-center">
                        <div class="impact-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h4>Vaccination</h4>
                        <p>Aidez-nous à organiser des campagnes de vaccination pour protéger les enfants contre les maladies évitables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Progress Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title text-start">Notre progression</h2>
                    <p class="mb-4">Nous avons déjà collecté <span class="text-primary-custom fw-bold">65%</span> de notre objectif de 500 000€ pour la construction de l'hôpital.</p>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Objectif de collecte</span>
                            <span>500 000€</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-center mt-2">
                            <span class="fw-bold">325 000€ collectés</span>
                        </div>
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="counter">1,250</div>
                            <div class="counter-label">Donateurs</div>
                        </div>
                        <div class="col-4">
                            <div class="counter">42</div>
                            <div class="counter-label">Jours restants</div>
                        </div>
                        <div class="col-4">
                            <div class="counter">85%</div>
                            <div class="counter-label">Frais réduits</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="../img/donate3.jpg" alt="Progression de la construction de l'hôpital" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Options -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Choisissez votre don</h2>
                    <p class="text-center mb-5">Chaque contribution, petite ou grande, fait une différence significative dans la vie des personnes que nous aidons.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="donation-option text-center" data-amount="25">
                        <h4 class="donation-amount">25€</h4>
                        <p class="donation-frequency">Don unique</p>
                        <p>Fournit des médicaments essentiels pour 10 patients</p>
                        <button class="btn btn-outline-primary-custom">Sélectionner</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="donation-option text-center selected" data-amount="50">
                        <h4 class="donation-amount">50€</h4>
                        <p class="donation-frequency">Don unique</p>
                        <p>Finance une consultation médicale pour 20 enfants</p>
                        <button class="btn btn-primary-custom">Sélectionné</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="donation-option text-center" data-amount="100">
                        <h4 class="donation-amount">100€</h4>
                        <p class="donation-frequency">Don unique</p>
                        <p>Permet d'acheter du matériel médical essentiel</p>
                        <button class="btn btn-outline-primary-custom">Sélectionner</button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="donation-option text-center" data-amount="monthly">
                        <h4 class="donation-amount">25€</h4>
                        <p class="donation-frequency">Par mois</p>
                        <p>Devenez donateur régulier et aidez-nous à planifier nos actions</p>
                        <button class="btn btn-outline-primary-custom">Sélectionner</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="donation-option text-center" data-amount="custom">
                        <h4 class="donation-amount">Montant personnalisé</h4>
                        <p class="donation-frequency">Don unique ou mensuel</p>
                        <p>Choisissez le montant qui vous convient</p>
                        <button class="btn btn-outline-primary-custom">Sélectionner</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Form -->
    <section id="donation-form" class="section-padding bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="donation-form">
                        <h2 class="section-title text-start mb-4">Finalisez votre don</h2>
                        
                        <form id="donationForm">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">Prénom *</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Nom *</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Montant du don *</label>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">€</span>
                                            <input type="number" class="form-control" id="customAmount" placeholder="Montant personnalisé" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input custom-radio" type="checkbox" id="monthlyDonation">
                                    <label class="form-check-label" for="monthlyDonation">
                                        Je souhaite faire ce don chaque mois
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Mode de paiement *</label>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input custom-radio" type="radio" name="paymentMethod" id="creditCard" checked>
                                            <label class="form-check-label" for="creditCard">
                                                <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i> Carte de crédit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input custom-radio" type="radio" name="paymentMethod" id="paypal">
                                            <label class="form-check-label" for="paypal">
                                                <i class="fab fa-paypal"></i> PayPal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="anonymousDonation">
                                    <label class="form-check-label" for="anonymousDonation">
                                        Je souhaite faire un don anonyme
                                    </label>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-secondary-custom btn-lg">Faire mon don</button>
                            </div>
                            
                            <div class="mt-3 text-center">
                                <small class="text-muted">Vos informations sont sécurisées et votre don est déductible des impôts à hauteur de 66%.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Testimonials -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Témoignages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        <img src="../img/img3.jpg" alt="Témoignage" class="testimonial-img">
                        <h5>Marie D.</h5>
                        <p class="text-muted">Donatrice régulière</p>
                        <p>"Je donne chaque mois car je sais que mon argent est utilisé efficacement pour sauver des vies. Recevoir des nouvelles du projet me montre l'impact concret de mon don."</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        <img src="../img/img3.jpg" alt="Témoignage" class="testimonial-img">
                        <h5>Jean P.</h5>
                        <p class="text-muted">Donateur</p>
                        <p>"J'ai fait un don important pour la construction de l'hôpital. La transparence de l'association et leur engagement sur le terrain m'ont convaincu de les soutenir."</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        <img src="../img/img3.jpg" alt="Témoignage" class="testimonial-img">
                        <h5>Sophie L.</h5>
                        <p class="text-muted">Bénévole et donatrice</p>
                        <p>"Ayant participé à une mission sur place, j'ai vu de mes propres yeux les besoins immenses. Chaque don, même modeste, change véritablement des vies."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Questions fréquentes</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Comment mon don sera-t-il utilisé ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Votre don sera principalement utilisé pour la construction et l'équipement de l'hôpital, l'achat de médicaments et de matériel médical, ainsi que la formation du personnel local. Moins de 10% des fonds sont alloués aux frais de fonctionnement.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Puis-je bénéficier d'une réduction d'impôt ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Oui, votre don est déductible à 66% de votre impôt sur le revenu dans la limite de 20% de votre revenu imposable. Pour un don de 100€, votre coût réel après déduction fiscale n'est que de 34€.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Comment puis-je suivre l'avancement du projet ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous envoyons régulièrement des newsletters à nos donateurs avec des photos, des témoignages et des rapports sur l'avancement des travaux. Vous pouvez également suivre nos actualités sur les réseaux sociaux.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Puis-je annuler mon don mensuel ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Oui, vous pouvez annuler votre don mensuel à tout moment en nous contactant par email ou en utilisant le lien de désabonnement présent dans chaque confirmation de don.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insérez votre footer ici -->
   
    
<?php require '../inc/footer.php' ?>