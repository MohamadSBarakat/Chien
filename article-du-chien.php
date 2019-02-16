<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "ARTICLE";
// INCLURE LE HEADER
include "header.php";
// RECUPERER L'ID DU CHIEN PASSÉ EN PARAMETRE
$id = $_GET['id'];
// APPEL DES FONCTIONS DE MON OBJET CONNEXION
$article = $appli->getArticleDetails($id);
$articleId = $article->getId();
$listeCommentaires = $appli->getArticleComments($articleId);
$nbreCommentaires = count($listeCommentaires);
?>
<!-- ARTICLE ET LES COMMENTAIRES -->
<div class="post post-single" style="background-image: url(http://usercontent.packdog.com/post/photo/bg/Ye9f19_3c697b22ae9363b1901b0d65fb46447d6e698659.jpg); background-color: #B5B5B5;">
	<div class="post-bgscreen">	
		<div class="post-container">
			<div class="post-header">
				<!-- TITRE DE L'ARTICLE -->
				<h2>
					<?php echo $article->getTitle() ?>
				</h2>		
				<!-- DATE DE PUBLICATION DE L'ARTICLE -->
				<div class="post-stamp">
					<div class="post-time"><?php echo $article->getPublicationDate() ?></div>
				</div>
			</div><!-- FIN POST-HEADER -->

			<!-- PHOTO DE L'ATICLE -->
			<div class="post-content">
				<img src="images/dog/<?php echo $article->getPicture()?>" alt="Photo d'article">
			</div>

			<!-- DESCIPTION DE L'ARTICLE -->
			<div class="post-actions">
				<div class="post-caption">
					<p><?php echo $article->getDescription() ?></p>
				</div>
			</div>	

			<!-- BLOCK COMMENTAIRES -->
			<div class="post-comments" id="comments">
				<!-- NOMBRE DE COMMENTAIRES -->
				<h3>
					<span class="post-commentstitle iconpostcomments">
						<span data-bind="comment-count"><?php echo $nbreCommentaires ?> commentaires</span> 
					</span>
				</h3>

				<!-- LISTE DES COMMENTAIRES -->
				<ul class="commentlist">
					<?php if (isset($_SESSION['email']) && isset($_SESSION['pwd'])){?>
					<!-- COMMENTER L'ARTCLE -->
					<li class="comment" id="comment_188868" data-id="188868">
						
						<div class="comment-author">
							<strong>Commenter l'article</strong>
						</div>
						
							<form action="" method="post">
								<?php include "action/article-du-chien-form.php";?>
								<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
								<p><textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea></p>
								<input type="hidden" name="idArticle" value="<?php echo $articleId ?>">
								<button class="btn btn-lg btn-primary btn-block text-uppercase" name="ajouterCommentaire" type="submit">Valider</button>
							</form>
					</li><!-- FIN comment -->
						<?php }
						?>
					
					
					<!-- COMMENTAIRES DE L'ARTICLE -->
					<?php foreach ($listeCommentaires as $commentaire){ 
						$user = $appli->getUserProfile($commentaire->getUserId());
						?>
					<li class="comment" id="comment_189914" data-id="189914">
						<!-- AUTEUR DU COMMENTAIRE -->
						<div class="comment-author">
							<strong><a href="#"><?php echo $user->getLastName() ; ?></a></strong>
						</div>
						<!-- COMMENTAIRE DE L'AUTEUR -->
						<p><?php echo $commentaire->getComment(); ?></p>
						<!-- DATE DE PUBLICATION DU COMMENTAIRE -->
						<div class="comment-time"><?php echo $commentaire->getPublicationDate(); ?></div>
					</li><!-- FIN comment -->
					<?php } ?>
				</ul><!-- comment list -->	

			</div><!-- post-comments -->		

		</div><!-- post-container -->
	</div><!-- post-bgscreen -->
</div>


<?php 

include "footer.php"
?>
