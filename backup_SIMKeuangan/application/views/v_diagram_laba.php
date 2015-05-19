<?php require('header.php'); ?>
<?php require('menu.php'); ?>
<script src="charisma-master/js/grafik/highcharts.js"></script>
<script src="charisma-master/js/grafik/modules/data.js"></script>
<script src="charisma-master/js/grafik/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
    $('#grafik').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Diagram Laba Rugi Tahunan'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
</script>

<div id='grafik'>
  <table id="datatable">
  <thead>
    <tr>
      <th></th>
      <th>Laba</th>
      <th>Rugi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($diagram_laba as $row)
        {
          echo "<tr>
                  <th>$row->tanggal</th>
                  <td>$row->laba</td>
                  <td>$row->rugi</td>
                </tr>";
        }
    ?>
  </tbody>
</table>
</div>