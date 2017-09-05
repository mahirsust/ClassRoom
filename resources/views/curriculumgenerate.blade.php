<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border-collapse: collapse;
		}
		td,th{
			border: 1px solid;
		}
		
	</style>
</head>
<?php
 $Semester = array("First Year : Semester I", "First Year : Semester II", "Second Year : Semester I", "Second Year : Semester II", "Third Year : Semester I", "Third Year : Semester II", "Fourth Year : Semester I", "Fourth Year : Semester II",  "Optional : Option", "Second Major Degree");
 $sem = $Semester[$id]; 
 ?>
<body>
	<div>
		<header>
			<h1 class="text-center">Curriculum for {{$sem}}</h1>  
		</header>
	</div>
	 <?php
     $credits = 0;
     $theory = 0;
     $lab = 0;
     ?>
	<table class="display table table-bordered table-stripe" style="background-color: #fff">
		<thead class="green-text">
			<tr class="panel-default">
				<th class="text-center">Course Code</th>
				<th class="text-center">Course Title</th>
				<th class="text-center">Hours/Week (Theory+Lab)</th>
				<th class="text-center">Credit</th>
				<th class="text-center">Prerequisite</th>
			</tr>
		</thead>
		<tbody>
			@foreach($curriculum as $dat)
			 <?php 
              $credits += + (double) $dat->credits;
              sscanf($dat->hours, '%[0-9,] + %[0-9,]', $a, $b);
              $theory  += $a;
              $lab += $b;
              ?>
			<tr class="default">
				<th tabindex="-1" class="text-center"> {{$dat->course}} </th>
				<td tabindex="-1" class="text-center"> {{$dat->title}} </td>
				<td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
				<td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
				<td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>
			</tr>
			@endforeach
			 <tr class="default">
                <td tabindex="-1" class="text-center">  </th>
                <td tabindex="-1" class="text-center"> Total </td>
                <td tabindex="-1" class="text-center"> {{$theory}} + {{$lab}} = {{$theory+$lab}} </td>
                <td tabindex="-1" class="text-center"> {{$credits}} </td>
                <td tabindex="-1" class="text-center">  </td>
              </tr>
		</tbody>
	</table>
</body>
</html>