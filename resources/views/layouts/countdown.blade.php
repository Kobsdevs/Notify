@extends('layouts.app')

@section('content')
<div class="grid auto-cols-max grid-flow-col gap-5 text-center">
    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
      <span class="countdown font-mono text-5xl">
        <span style="--value:15;"></span>
      </span>
      days
    </div>
    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
      <span class="countdown font-mono text-5xl">
        <span style="--value:10;"></span>
      </span>
      hours
    </div>
    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
      <span class="countdown font-mono text-5xl">
        <span style="--value:24;"></span>
      </span>
      min
    </div>
    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
      <span class="countdown font-mono text-5xl">
        <span style="--value:${counter};"></span>
      </span>
      sec
    </div>
  </div>
@endsection