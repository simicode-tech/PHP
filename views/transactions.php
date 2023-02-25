<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php if(! empty($transactions)): ?>
                    <?php foreach($transactions as $transaction): ?>
                            <tr>
                                <td><?=formatDate($transaction['date']) ?></td>
                                <td><?=$transaction['checkNumber'] ?></td>
                                <td><?=$transaction['description'] ?></td>
                                <td>
                                    <?php if ($transaction['amount'] < 0): ?>
                                        <span style="color:red">
                                            <?=formatAmount($transaction['amount']) ?>
                                        </span>
                                    <?php elseif ($transaction['amount'] > 0): ?>  
                                        <span style="color:green">
                                            <?=formatAmount($transaction['amount']) ?>
                                        </span> 
                                    <?php else : ?>  
                                        <?=formatAmount($transaction['amount']) ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                    <?php endforeach ?>
                <?php endif ?>
                
            </tbody>
            <tfoot>
                <tr>
                    <th colspan='3'> Total Income</th>
                    <td><?=formatAmount($totals['totalIncome']?? 0) ?></td>

                </tr>
                <tr>
                    <th colspan='3'> Total Expense</th>
                    <td><?=formatAmount($totals['totalExpense']?? 0) ?></td>

                </tr>
                <tr>
                    <th colspan='3'>Net Total</th>
                    <td><?=formatAmount($totals['nexTotal']?? 0 )?></td>

                </tr>
            </tfoot>
        </table>

    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>