 <!-- Footer Start -->
 <footer class="footer mt-5">
     <div class="footer__items">

         <div class="footer__items__item">
             <h4>
                 Contact
             </h4>

             <ul>
                 <li>
                     <i class="bi bi-geo"></i> Avotrou, lot 720, Cotonou
                 </li>
                 <li>
                     <i class="bi bi-envelope"></i> contact@ong2a2d.com
                 </li>

                 <li>
                     <i class="bi bi-phone"></i> +229 96 83 16 26
                 </li>

                 <li>
                     <i class="bi bi-whatsapp"></i> +229 96 83 16 26
                 </li>
             </ul>
         </div>

         <div class="footer__items__item">
             <h4>
                 Liens utiles
             </h4>

             <ul>
                 <li><a href="index.php?action=projectsPage">Projets</a></li>
                 <li><a href="index.php?action=teamPage">Equipe</a></li>
                 <li><a href="index.php?action=home#contact">Contact</a></li>
                 <?php
                    if (isset($_SESSION['user'])) { ?>
                     <li><a href="index.php?action=dashboard_adminPage">Tableau de bord</a></li>
                     <li><a href="api/script.php?action=logout">Déconnexion</a></li>
                 <?php } else { ?>
                     <li><a href="index.php?action=loginPage">Connexion</a></li>
                 <?php } ?>
             </ul>
         </div>

         <div class="footer__items__item">
             <h4>
                 Notre ONG
             </h4>

             <ul>
                 <li><a href="index.php?action=home">A-propos</a></li>
                 <li><a href="index.php?action=termsPage">Conditions générales d'utilisation</a></li>
                 <li><a href="index.php?action=policyPage">Politique de confidentialité</a></li>
             </ul>
         </div>

         <div class="footer__items__item">
             <h4>
                 Newsletters
             </h4>
             <form action="api/script.php?action=subscribe" method="POST">
                 <div class="newsletters">
                     <label for="">
                         <input type="email" name="email" required placeholder="Email"> <br>
                         <button type="submit" class="btn btn-primary mt-2">Souscrire</button>
                     </label>
                 </div>
             </form>
         </div>

     </div>

     <hr>
     <div class="footer__bottom">
         <div class="text text-center">
             <p class="text-center">
                 © ONG 2A2D, 2024 <br>
                 <strong class="">
                     Tous droits réservés
                 </strong>
             </p>

         </div>
     </div>
 </footer>
 <!-- Footer End -->

 <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>