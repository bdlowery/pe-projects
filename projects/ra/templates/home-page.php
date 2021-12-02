
<section class='landing'>
<inner-column>

	<h1 class='loud-voice'>Welcome area</h1>

	<p class='calm-voice'>This is the first impression.</p>

	<p class='calm-voice'>What needs to happen here?</p>

	<p class='calm-voice'>This needs to "impress" or otherwise / just continue to build confidense in some way.</p>

</inner-column>
</section>



<section class='what'>
<inner-column>

	<h2 class='attention-voice'>What RA does</h2>

	<p class='calm-voice'>Can they help me?</p>

	<p class='calm-voice'>What needs to happen here?</p>

</inner-column>
</section>



<section class='how'>
<inner-column>

	<h2 class='attention-voice'>Find your options</h2>

	<p class='calm-voice'>We don't know if we can help you yet.</p>

	<p class='calm-voice'>What would help you - and what won't</p>

	<p class='calm-voice'>Clarify / no fluff - clear out the jargon</p>

	<a class='cta' href='#'>CALL US</a>

</inner-column>
</section>



<section class='services'>
<inner-column>

	<h2 class='attention-voice'>Our services</h2>

	<p class='calm-voice'>Short / simple - experts.</p>

	<?php 
		$service_data = [
			[
				"id" => 1,
				"name" => "Service name",
			],
			[
				"id" => 2,
				"name" => "Another service name",
			],
			[
				"id" => 3,
				"name" => "Yet - another service name",
			],
		];
	?>

	<?php foreach ($service_data as $service) { ?>
	<section class='service'>
		<h3><?=$service["name"];?></h3>

		<p class='calm-voice'>Service desctipion + some interesting graphic?</p>

		<div class='mini-testimonial'>
			<h4>Person saying how great we are.</h4>
			<p class='calm-voice'>Source</p>
		</div>
	</section>
	<?php } ?>

</inner-column>
</section>



<section class='why'>
<inner-column>

	<h2 class='attention-voice'>Goal oriented : how we're different</h2>

	<p class='calm-voice'>Help guide you / no pressure.</p>

	<p class='calm-voice'>What would help you - and what won't</p>

	<p class='calm-voice'>Clarify / no fluff - clear out the jargon</p>

</inner-column>
</section>



<section class='start-now'>
<inner-column>

	<h2 class='attention-voice'>Final pitch : call us</h2>

	<p class='calm-voice'>...</p>

	<p class='calm-voice'>How do people like to get in touch?</p>

	<a class='cta' href='?page=contact'>CALL US</a>

</inner-column>
</section>



<section class='more'>
<inner-column>

	<h2 class='attention-voice'>If you're still not convinced...</h2>

	<p class='calm-voice'>Testimonials</p>

</inner-column>
</section>

