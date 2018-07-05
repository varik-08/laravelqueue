<html>
<head>
    <title>Tasks</title>
</head>
<body>
@php
    if($id != null)
    {
        switch ($id)
        {
            case 1:
                $c = DB::select('select  counter from tasks where id = 1');
                DB::update('update tasks set counter = '.++$c[0]->counter.' where id = 1');
                DB::table('logs')->insert(['task_id'=>'1','status'=>$c[0]->counter]);
                break;
             case 2:
                 $c = DB::select('select  counter from tasks where id = 2');
                DB::update('update tasks set counter = '.++$c[0]->counter.' where id = 2');
                DB::table('logs')->insert(['task_id'=>'2','status'=>$c[0]->counter]);
                break;
              case 3:
                 $c = DB::select('select  counter from tasks where id = 3');
                DB::update('update tasks set counter = '.++$c[0]->counter.' where id = 3');
                DB::table('logs')->insert(['task_id'=>'3','status'=>$c[0]->counter]);
                break;
               case 4:
                 $c = DB::select('select  counter from tasks where id = 4');
                DB::update('update tasks set counter = '.++$c[0]->counter.' where id = 4');
                DB::table('logs')->insert(['task_id'=>'4','status'=>$c[0]->counter]);
                break;
        }
    }

    $tasks = DB::select('select * from tasks');
    echo '<table border="3">';
    $count=1;
    foreach ($tasks as $task )
    {
        echo '<tr>';
         echo '<td>'. $task->id .'</td>';
         echo '<td><a href="/'.$count.'">'. $task->name .'</a></td>';
         echo '<td>'. $task->counter .'</td>';
        echo '</tr>';
        $count++;
    }

    echo '</table>';

@endphp

</body>
</html>