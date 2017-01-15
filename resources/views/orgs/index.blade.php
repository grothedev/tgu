@extends('template')

@section('container')
	<h4>Student Organizations within the Green Umbrella</h4>
	<div class = "row">
		<div class = "eight columns">

			<ul style = "list-style: none;">

				@foreach ($orgs as $org)
					<li><a href = "{{ $org->url }}">{{ $org->name }}</a></li>
				@endforeach

				<li><a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/activus">ActivUs</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/closets-collide">Closets Collide</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/design-across-boundaries">Design Across Boundaries</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/ducks-unlimited-isu-chapter">Ducks Unlimited, ISU Chapter</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/engineers-sustainable-world">Engineers for a Sustainable World</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/environmental-studies-club">Environmental Studies Club</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/graduate-program-sustainable-agriculture-student">Graduate Program in Sustainable Agriculture Student Association (GPSASA)</a></li>
				<li> <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/graduate-research-evolutionary-biology-and-ecology">Graduate Research in Evolutionary Biology and Ecology (GREBE)</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/greeks-go-green">Greeks Go Green</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/henry-wallace-chair-sustainable-agriculture">Henry A. Wallace Chair for Sustainable Agriculture</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/inter-residence-hall-association">Inter-Residence Hall Association</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/iowa-state-university-students-free-enterprise">Iowa State University Students in Free Enterprise</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/isu-biobus">ISU BioBus</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/isu-cycling-club">ISU Cycling Club</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/isu-student-organic-farm">ISU Student Organic Farm</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/leaders-sustainable-community-lsc">Leaders for a Sustainable Community (LSC)</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/nrem-graduate-student-organization">NREM Graduate Student Organization</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/prisum-solar-car-team">PrISUm Solar Car Team</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/soil-water-conservation-club">Soil & Water Conservation Club</a></li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/green-umbrella">The Green Umbrella</li>
				<li > <a href = "http://www.livegreen.iastate.edu/connect/livegreen-groups/student-organization/greenhouse-group">The GreenHouse Group</a></li>
			</ul>
		</div>
		<div class = "four columns">
			<h6 style = "font-size: 1.6rem;"><a href = "orgs/create">Don't see your organization on the list? Add it!</a></h6>
		</div>
	</div>
@stop