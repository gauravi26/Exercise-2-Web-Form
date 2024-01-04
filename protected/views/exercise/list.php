<style>
 .report-container {
    grid: display !important;
    grid-template-columns: repeat(4, 1fr) !important;
    grid-gap: 15px !important;
    justify-content: center !important;
    align-items: center !important;
    background-color: #E8E8E8 !important;
    border-radius: 12px !important;
    padding: 20px !important;
    font-family: 'Roboto' !important;
    width: 900px !important;
    margin: 20px auto !important;
}

.report-container h2 {
    text-align: center !important;
    grid-column: span 4 !important;
    color: #0000ff !important;
    font-size: 28px !important;
}

.report-table {
    width: 850px !important;
    border-collapse: separate !important;
    border-spacing: 0 12px !important;
    margin-top: 20px !important;
    background-color: #fff !important;
}

th {
    padding: 12px !important;
    border: 2px dotted white !important;
    background-color: #181818 !important;
    color: #fff !important;
    font-weight: bold !important;
    font-size: 25px !important;
}

tr:nth-child(even) {
    background-color: #787878 !important;
}

tr:nth-child(odd) {
    background-color: #606060 !important;
}

tr:hover {
    background-color: #202020 !important;
}

td {
    padding: 10px !important;
    border: 2px groove !important;
    color: #ffffff !important;
}

tfoot {
    background-color: #008000 !important;
    color: #fff !important;
    font-weight: bold !important;
}
   
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Themes</title>
</head>
<body>
    <div class="report-container">
        <h2>CHAIN-FOR-CHILDREN'S-CHEER</h2>
        <table class="report-table" id="tableThemeTable">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Remark</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member): ?>
                    <tr>
                        <td><?php echo $member->id; ?></td>
                        <td>
                            <?php
                                // Assuming Exercise::model() returns an instance of the Exercise model
                                $exerciseModel = Exercise::model()->findByPk($member->id);
                                echo $exerciseModel->name; // Replace 'name' with the actual attribute you want to display
                            ?>
                        </td>
                        <td><?php echo $member->profession; ?></td>
                        <td><?php echo $member->location; ?></td>
                        <td><?php echo $member->country; ?></td>
                        <td><?php echo $member->remark; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="http://localhost/report/AjaxFiles/datatable.js"></script>
</body>
</html>
