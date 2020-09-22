@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

                    <?php
                    use Illuminate\Support\Facades\Log;
                    log::debug('gdd 04 $events= event::all();');?>

<?php
                    $results = App\Models\events()::All();
                    $event = new \App\Models\event();
?>
                    <form name='f1' method="POST" action="process_post.php">
                        <fieldset>
                            <legend> Select an Event </legend>

                            <select class="dropdown" id="eventsdd" name="eventsdropdown" title="Events Dropdown"  onclick="doclick(this)" >
                              <?php
                                 foreach ($results as $event){?>
                                 <option value=
                                   <?php echo $event['id'] ?>">"
                                   <?php echo $event['event'];  ?>
                                 </option>
                            </select>

             <p>

                <input type="text" id="hideme">
                <input type="text" id="ename" name="EVENT" value = "" placeholder="Select an existing or enter a new event">
            </p>
            <p>
                <label id="label4" for="DESCRIPTION">Description</label>
                <textarea rows="5" cols="50" form="f1" name="DESCRIPTION" placeholder="Describe the event" id="DESCRIPTION"></textarea>
            </p>

            <input type='submit' id='submit_id' name='submit_id'</input>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
