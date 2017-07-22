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
	<div class="panel-body">
        <table class="display table table-bordered table-stripe table-hover">
            <thead>
            
              <tr class="panel-default">
                <th class="text-center">Day</th>
                <th class="text-center">8 AM</th>
                <th class="text-center">9 AM</th>
                <th class="text-center">10 AM</th>
                <th class="text-center">11 AM</th>
                <th class="text-center">12 PM</th>
                <th class="text-center">1 PM</th>
                <th class="text-center">2 PM</th>
                <th class="text-center">3 PM</th>
                <th class="text-center">4 PM</th>
              </tr>
            </thead>
            <tbody>
            @foreach($routine as $dat)
	              <tr class="default">
	                  <th tabindex="-1" class="text-center"> {{$dat->day}} </th>
	                  <td tabindex="-1" class="text-center"> {{$dat->eightnine}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->nineten}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->teneleven}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->eleventwelve}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->twelveone}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->onetwo}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->twothree}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->threefour}} </td>
	                  <td tabindex="-1" class="text-center"> {{$dat->fourfive}} </td>         
	              </tr>
	       
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>