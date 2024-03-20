@extends('layouts.user-profile-wide')

@section('subtitle', trans('app.family_tree'))

@section('user-content')

    <h3>@include('users.partials.list-couples-label',['sunah'=>$user])</h3>
    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Lv - {{ trans('user.name') }}</th>
            <th>{{ trans('user.gender') }}</th>
            <th>{{ trans('user.address') }}</th>
            <th>{{ trans('user.phone') }}</th>
        </tr>
        <?php
        $i=0;
        $lv1Count = 0;
        foreach ($user->childs as $child) {
            $i++;
            $lv1Count++;
            ?>
            <tr>
                <td><?= $i?></td>
                <td><?= $lv1Count ?> - @include('users.partials.list-couples-label',['sunah'=>$child])</td>
                <td>{{$child->gender}}</td>
                <td>{{$child->address}}</td>
                <td>{{$child->phone}}</td>
            </tr>
            <?php
            //level2 begin
            $lv2Count = 0;
            foreach ($child->childs as $lv2) {
                $i++;
                $lv2Count++;
                ?>
                <tr>
                    <td><?= $i?></td>
                    <td><?= $lv1Count . "." . $lv2Count ?> - @include('users.partials.list-couples-label',['sunah'=>$lv2])</td>
                    <td>{{$lv2->gender}}</td>
                    <td>{{$lv2->address}}</td>
                    <td>{{$lv2->phone}}</td>
                </tr>
                <?php
                //level 3 begin
                $lv3Count = 0;
                foreach ($lv2->childs as $lv3) {
                    $i++;
                    $lv3Count++;
                    ?>
                    <tr>
                        <td><?= $i?></td>
                        <td><?= $lv1Count . "." . $lv2Count .".". $lv3Count?> - @include('users.partials.list-couples-label',['sunah'=>$lv3])</td>
                        <td>{{$lv3->gender}}</td>
                        <td>{{$lv3->address}}</td>
                        <td>{{$lv3->phone}}</td>
                    </tr>
                    <?php
                    //level 4 begin
                    $lv4Count = 0;
                    foreach ($lv3->childs as $lv4) {
                        $i++;
                        $lv4Count++;
                        ?>
                        <tr>
                            <td><?= $i?></td>
                            <td><?= $lv1Count . "." . $lv2Count .".". $lv3Count.".". $lv4Count?> - @include('users.partials.list-couples-label',['sunah'=>$lv4])</td>
                            <td>{{$lv4->gender}}</td>
                            <td>{{$lv4->address}}</td>
                            <td>{{$lv4->phone}}</td>
                        </tr>
                        <?php
                        //level 5 begin
                        $lv5Count = 0;
                        foreach ($lv4->childs as $lv5) {
                            $i++;
                            $lv5Count++;
                            ?>
                            <tr>
                                <td><?= $i?></td>
                                <td><?= $lv1Count . "." . $lv2Count .".". $lv3Count.".". $lv4Count.".". $lv5Count?> - @include('users.partials.list-couples-label',['sunah'=>$lv5])</td>
                                <td>{{$lv5->gender}}</td>
                                <td>{{$lv5->address}}</td>
                                <td>{{$lv5->phone}}</td>
                            </tr>
                            <?php
                            //level 6 begin
                            $lv6Count = 0;
                            foreach ($lv5->childs as $lv6) {
                                $i++;
                                $lv6Count++;
                                ?>
                                <tr>
                                    <td><?= $i?></td>
                                    <td><?= $lv1Count . "." . $lv2Count .".". $lv3Count.".". $lv4Count.".". $lv5Count.".". $lv6Count?> - @include('users.partials.list-couples-label',['sunah'=>$lv6])</td>
                                    <td>{{$lv6->gender}}</td>
                                    <td>{{$lv6->address}}</td>
                                    <td>{{$lv6->phone}}</td>
                                </tr>
                                <?php
                            }
                            //level 6 end
                        }
                        //level 5 end
                    }
                    //level 4 end
                }
                //level 3 end
            }
            //level2 end
        }
        ?>
    </table>

@endsection
