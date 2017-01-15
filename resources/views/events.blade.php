@extends('template')



@section('container')

	<div class = "row">
	
		<div class = "row" style="background-image: url('/img/ncsd.jpg'); background-repeat: no-repeat; background-size: 100%;"">
			<div class = "four columns event-overlay">
				<center><h5>National Campus Sustainability Day</h5>
				<h6>Late October - Free Speech Zone</h6></center>

				<p>NCSD is an event where we invite many affiliated sustainability clubs as well as local businesses and university entities to showcase what they do through tabling. The Green Umbrella facilitates conversation and offers prizes for talking to groups including reusable mugs and a raffle. </p>
			</div>
			<div class = "four columns event-overlay">
				<center><h5>Sustainapalooza</h5>
				<h6>Late February - Memorial Union Great Hall</h6></center>

				<p>Sustainapalooza happens as a kickoff event to the Live Green Symposium on Sustainability. We often have a keynote speaker the day before or after the event and another speaker at the end of the event. We will have interactive learning stations which we call Green It Yourself Centers where people can learn interesting sustainability related skills such as indoor gardening, how to make clothing out of old materials, bicycle maintenance, and outdoor survival skills. We often build a centerpiece called the Green Wall to showcase The Green Umbrella and sustainability at Iowa State, and ask people to make a pledge to live green while offering prizes. There is also a professional poster session and local food available.</p>
			</div>
			<div class = "four columns event-overlay" >
				<center><h5>Earth Week</h5>
				<h6>April 22nd - Location TBA</h6></center>

				<p>Our Earth Day celebration is an event that has taken the same form as NCSD in the past, but this year we have the opportunity to collaborate with our affiliated organizations to make it bigger and better than ever!</p>
			</div>
		</div>
	</div>

	<script>
		function init(){
			$('.event-overlay').hover(function(){
				$(this).fadeTo(300, .95, 'swing');
			}, function(){
				$(this).fadeTo(300, .6, 'swing');
			});
		}
	</script>

	<body onload = "init();" />
@endsection