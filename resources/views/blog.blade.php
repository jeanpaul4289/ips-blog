@extends('pages.layouts.app')
@section('content')
<div class="row">
	<div class="leftcolumn">
		<div class="title">
			<h1>10 Best Photo Apps For Incredible iPhone Photography (2020 Edition)</h1>
			<hr class="divider">
		</div>
		<div class="card">
			<p>How do you capture more interesting travel photos with your iPhone? How do you avoid taking the same cliché vacation photos that everyone else takes? I recently interviewed Steffen Geldner – a talented iPhone photographer with a passion for travel. In this article, Steffen reveals 7 tips for shooting beautiful travel photos that will preserve the amazing memories of your trip. Read on to discover how to take better travel photos with your iPhone!</p>
		</div>
		<img src="/images/img.jpg" alt="Plane Flying" />
		<div class="card">
			<h2>1. Research Your Destination To Find The Best Photo Opportunities</h2>
			<p>Before your trip, I recommend researching the destination to find the most interesting photo opportunities.</p>
			<p>I always research the location I’m traveling to. I do this extensively and obsessively! </p>
			<p>It’s up to you how much research you do. But you should definitely spend a bit of time looking up some great places to take pictures.</p>
			<p>So, what kind of research can you do? </p>
			<p>First, you could search for photos that other people have taken at the locations you’re planning to visit.</p>
			<p>Search on Instagram or Google to get an idea of the kinds of photos people take there.</p>
		</div>
		<div class="card">
			<h2>2. Capture Your Journey To Tell The Complete Story Of Your Travels</h2>
			<p>Travel photography isn’t just about photographing the destination.</p>
			<p>For a more complete photographic story, capture your journey to and from the location you’re visiting.</p>
			<p>If you’re traveling by plane, try to get a window seat where you have a view of the wing or propeller.</p>
			<p>And of course, you could capture a beautiful aerial view of clouds, mountains, or city lights as you’re flying above.</p>
			<p>Your journey will often involve several different types of transport. And they all offer great photo opportunities.</p>
			<p>Whether you’re traveling by car, taxi, bus, train, boat, or plane, try to capture some interesting photos.</p>
		</div>
	</div>
	<div class="rightcolumn">
		<button id="show-modal" @click="showModal()">Send Me The Tips</button>
	</div>
</div>
@endsection