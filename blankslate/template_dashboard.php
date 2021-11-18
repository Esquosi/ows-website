<?php /* Template Name: Dashboard */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<main>
	<!-- <section class="section-social">
		<div class="social">
			<div class="social__icon">
				<a href="#twitter">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png">
				</a>
			</div>
			<div class="social__icon">
				<a href="#discord">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/discord.png">
				</a>
			</div>
			<div class="social__icon">
				<a href="#telegram">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.png">
				</a>
			</div>
		</div>
	</section> -->


	<section class="section-presentation">
		<div id="home"><a name="home"></a></div>
		<div class="dashboard-presentation">
			<div class="presentation__slogan">
				<div class="">
					<h1 class="heading-primary heading-primary--main">Projects</h1>
				</div>
			</div>
			<div id="projects-list"></div>
		</div>


		
	</section>
	
	
</main>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/airtable.browser.js"></script>
<script>
	jQuery(document).ready(function ($){
		var Airtable = require('airtable');
		var base = new Airtable({apiKey: 'keyj9qu03vqyGy4Sk'}).base('appljSNzZ7c9SAqXG');
		
		base('Projects DDBB').select({
			view: "Grid view"
		}).eachPage(function page(records, fetchNextPage) {
			// This function (`page`) will get called for each page of records.
		
			records.forEach(function(record) {
				//console.log(record.fields['Requestor']);
				renderBox(record.fields);
			});
		
			// To fetch the next page of records, call `fetchNextPage`.
			// If there are more records, `page` will get called again.
			// If there are no more records, `done` will get called.
			fetchNextPage();
		
		}, function done(err) {
			if (err) { console.error(err); return; }
		});
		
		
	});
	
	function renderBox(record) {
		let dueDate = record['Task Due Date (Deadline)'] || '--';
		console.log(dueDate);
		let requestor = record['Requestor'] || '--';
		let skillsLenght = record['Skills required']?.length || 0;
		el = jQuery('<div/>').addClass('project');
		el.append(jQuery('<h3/>').text(requestor));
		skillsParragraph = jQuery('<p/>').addClass('skills');
		linksParragraph = jQuery('<p/>').addClass('links');
		dueDateParragraph = jQuery('<p/>').addClass('due');
		if(skillsLenght > 0){
			for(let i = 0; i < skillsLenght; i++){
				jQuery(skillsParragraph).append(jQuery('<span/>').text(record['Skills required'][i]));
			}
		}
		
		if(record['Website']){
			jQuery(linksParragraph).append(jQuery('<a/>').attr('href', record['Website']).attr('target', '_blank').text('W'));
		}
		
		if(record['Discord Server']){
			jQuery(linksParragraph).append(jQuery('<a/>').attr('href', record['Discord Server']).attr('target', '_blank').text('D'));
		}
		
		if(record['Telegram Link']){
			jQuery(linksParragraph).append(jQuery('<a/>').attr('href', record['Telegram Link']).attr('target', '_blank').text('D'));
		}
		
		if(record['Twitter']){
			jQuery(linksParragraph).append(jQuery('<a/>').attr('href', record['Twitter']).attr('target', '_blank').text('D'));
		}
		
		if(dueDate != '--'){
			jQuery(dueDateParragraph).text('Due date: ' + dueDate);
		}
		
		el.append(skillsParragraph);
		el.append(linksParragraph);
		el.append(dueDateParragraph);
		jQuery('#projects-list').append(el);
	}
	
</script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>