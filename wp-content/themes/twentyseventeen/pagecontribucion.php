<?php
    /* Template Name: Formulario contribucion */
?>


<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>formulario para colaboradores</h1>

			<form name="contenidoColaboradores" id="contenidoColaboradores" method="post">
				<p>
					<input type="text" name="tituloPost" placeholder="Escribe el titulo de la entrada"/>
				</p>

				<p>
					<?php
						wp_editor(
							$post_obj->post_content, 'userpostcontent', 
							array('textarea_name' => 'content')
						);
					?>
				</p>

				<p>
					<input type="submit" value="Enviar Post"/>
				</p>

				<?php wp_nonce_field('contenidoColaboradores'); ?>
			</form>

			<?php
				$mi_entrada = array(
					'post_title' => wp_string_all_tags($_POST['tituloPost']),
					'post_content' => $_POST['content'],
					'post_type' => 'post',
					'post_status' => 'pending',
					'post_author' => $user_id
				);

				$nuevo_post = wp_insert_post($mi_entrada);

			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
