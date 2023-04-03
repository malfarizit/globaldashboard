<center><a class="btn btn-info" href="<?php echo base_url(); ?>Main/sqd" role="button">SQD Statistic Dashboard</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>Main/sqd_kpi" role="button">SQD KPI</a></center>
<br>
<div class="dropdown center-block " style="margin-left: 44%;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">SQD KPI Data Control
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="https://docs.google.com/spreadsheets/d/111W4LRZrOvDf5vaCudqzhWwUgtgZI9xtrktWTezHty0/" target="_blank">CA</a></li>
    <li><a href="https://docs.google.com/spreadsheets/d/1Dqob175POQ-ZZPWAVxZUHH4pZPyW9ryUUwvfWTidvII/" target="_blank">Global</a></li>
    <li><a href="https://docs.google.com/spreadsheets/d/1i0l9C7nue8ljtRFMSPKceQVGk8Dxq53Hs2xfKo9LOaA/" target="_blank">CTB</a></li>
  </ul>
</div>
<section class="desktop" style="display: none">
<span>
<section class="col-lg-12 connectedSortable">  
  <div class='box' style='min-height:250px;'>
    <div class='box-header'>
      <center><h3 class='box-title'>SQD KPI Desktop View</h3></center>
    </div>  
	<!-- <div class="container" style="width: 100%; height: 60%;">
		<div id=""><iframe title="KPIS" width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiZDg5ZGJhNDMtYTIyZC00OTU5LWI4N2UtMDg4ZTVhZjQ3MjBjIiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D&pageName=ReportSection41596732455145000c15" frameborder="0" allowFullScreen="true"></iframe></div>
	</div> -->
  <div id="reportContainer" class="dds__d-none" style="height:804px; overflow-y:hidden">
    <iframe id="reportFrame" onload="powerBiLoaded()" frameborder="0" seamless="seamless" class="viewer pbi-frame" style=" width: 100%; height: 840px;" src="https://app.powerbi.com/view?r=eyJrIjoiZTE3YmNmMDMtYWU5My00MTM1LWJjMTgtY2MzMjIxOWM4NzI1IiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D&pageName=ReportSection28135372841744b0724a">
    </iframe>
</div>
  </div> 
</section>
</section>
    </span>


<section class="mobile" style="display: none">
<section class="col-lg-12 connectedSortable">  
  <div class='box' style='min-height:250px;'>
    <div class='box-header'>
      <center><h3 class='box-title'>SQD KPI Mobile View</h3></center>
    </div>  
	<!-- <div class="container" style="width: 100%; height: 60%;">
		<div id=""><span><iframe title="Report Section" width="500" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiYzcxMDEzZmMtZGFlYy00MDVjLWFlZDYtMGYzZjJjYmI4MjRmIiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe></div></span>
	</div> -->
  <div id="reportContainer" class="dds__d-none" style="height:804px; overflow-y:hidden">
    <iframe id="reportFrame" onload="powerBiLoaded()" frameborder="0" seamless="seamless" class="viewer pbi-frame" style=" width: 100%; height: 840px;" src="https://app.powerbi.com/view?r=eyJrIjoiZTE3YmNmMDMtYWU5My00MTM1LWJjMTgtY2MzMjIxOWM4NzI1IiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D&pageName=ReportSection28135372841744b0724a">
    </iframe>
</div>
  </div> 
</section>
</section>
    
<script>
  window.addEventListener( 'load', () => {
    startQueries()
    })
    const startQueries = () => {
    let newQuery = window.matchMedia( ' ( max-width: 767px ) ' )
    const queryListenChanges = query => {
    if( query.matches ){
    document.querySelector( '.mobile' ).style.display = 'block'
    document.querySelector( '.desktop' ).style.display = 'none'
    }else{
        document.querySelector( '.desktop' ).style.display = 'block'
        document.querySelector( '.mobile' ).style.display = 'none'
}
}
    newQuery.addListener( queryListenChanges )
    queryListenChanges( newQuery )
}
</script>
<!-- <script src="app.js"></script> -->

<!-- <section class="col-lg-12 connectedSortable">  
  <div class='box' style='min-height:250px;'>
    <div class='box-header'>
      <center><h3 class='box-title'>Hazard Spotting</h3></center>
    </div>  
	<div class="container" style="width: 100%; height: 80%;">
		<div id=""><iframe title="KPIS" width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiN2MzZDlhYWYtNzllYy00YWU5LWEyZTUtNGNmOWQxNTk2MzA3IiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe></div>
	</div>
  </div> 
</section>

<section class="col-lg-12 connectedSortable">  
  <div class='box' style='min-height:250px;'>
    <div class='box-header'>
      <center><h3 class='box-title'>QHSE</h3></center>
    </div>  
	<div class="container" style="width: 100%; height: 80%;">
		<div id=""><iframe title="KPIS" width="100%" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiZDg5ZGJhNDMtYTIyZC00OTU5LWI4N2UtMDg4ZTVhZjQ3MjBjIiwidCI6ImVmNzI2YmJkLWZhOTYtNDNmOS1hZmMxLTZjMDc5ZDk2YmQ5MSIsImMiOjEwfQ%3D%3D&pageName=ReportSection41596732455145000c15" frameborder="0" allowFullScreen="true"></iframe></div>
	</div>
  </div> 
</section>

<section class="col-lg-7 connectedSortable"> 

  <div class='box' style='min-height:395px;'>
    <div class='box-header'>
      <h3 class='box-title'>Chart</h3>
    </div> 
	<div class="container" style="width: 100%; height: 70%;">
		<canvas id="myChart" ></canvas>
	</div>
  </div> 
</section><!-- /.Left col --> 

  
  
  
