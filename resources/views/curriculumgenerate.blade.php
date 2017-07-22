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
<body>
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
	    @if($dat->batch=="11")
	      <tr class="default">
	          <th tabindex="-1" class="text-center"> {{$dat->course}} </th>
	          <td tabindex="-1" class="text-center"> {{$dat->title}} </td>
	          <td tabindex="-1" class="text-center"> {{$dat->hours}} </td>
	          <td tabindex="-1" class="text-center"> {{$dat->credits}} </td>
	          <td tabindex="-1" class="text-center"> {{$dat->prerequisite}} </td>
	      </tr>
	    @endif
	  @endforeach
	  <tr class="default">
	    <th tabindex="-1" class="text-center">  </th>
	    <td tabindex="-1" class="text-center"> Total </td>
	    <td tabindex="-1" class="text-center"> 14 + 14 = 28 </td>
	    <td tabindex="-1" class="text-center"> 21 </td>
	    <td tabindex="-1" class="text-center">  </td>
	  </tr>
	</tbody>
   </table>
</body>
</html>