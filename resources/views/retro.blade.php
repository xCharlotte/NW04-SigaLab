@extends('layouts.app')

@section('content')


<div id="app">
  <div id="example-1">
<button v-on:click="counter += 1">Add 1</button>
<p>The button above has been clicked @{{ counter }} times.</p>
</div>
</div>
...
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.27/vue.js"></script>
<script>
var example1 = new Vue({
  el: '#example-1',
  data: {
    counter: 0
  }
})
</script>


<!-- <div class="container">
  <div class="col-md-3 col-md-offset-2">
    <h3>Dit ging goed</h3>
  </div>

    <div class="col-md-3 col-md-offset-2">
      <h3>Dit kon beter</h3>
    <div class="col-md-3 cold-md-offset-2">
    </div>
  </div> -->

@endsection
