@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">

            <div class="card-header">
                <h1 class="text-dark text-center">LOG ENTRY</h1>
            </div>
        
    <table class="table table-striped table-bordered text-center bg-light">
        <thead class="table-dark">
            <tr>
                            <th>Time Stamp</th>
                            <th>Activity Log</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @forelse ($logs as $log )
                        <tr>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->log_entry}}</td>
                        </tr>
                        @empty
                            <td>No Logs Available</td>
                        @endforelse
                       
                    </tbody>
                </table>
                {{-- <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-sm btn-warning mx-2" wire:click="/index" >Back</button>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection