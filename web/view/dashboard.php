<table class="table table-striped">
  <caption>My Appointments</caption>
  <thead>
    <tr>
      <th scope="col" style="width:5%">#</th>
      <th scope="col" style="width:20%">Date</th>
      <th scope="col" style="width:20%">Time</th>
      <th scope="col" style="width:35%">Reason</th>
      <th scope="col" style="width:20%">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($data) && !empty($data)): ?>
      
    <?php endif ?>
    <?php foreach ($data as $key => $row): ?>
      <tr>
        <th scope="row"><?php echo $key+1; ?></th>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['start_time'].' to '.$row['end_time']; ?></td>
        <td><?php echo $row['reason']; ?></td>
        <td><?php echo $row['status']; ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>