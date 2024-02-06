@extends('layouts.app')

@section('title','Phones')

@section('content')

<h4>
    Lista de contacte
</h4>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Phone</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacte as $contact)
        <tr>
        <td>{{$contact->user()->fullname()}}</td>
        <td>{{$contact->phone}}</td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No data</td>
        </tr>
        @endforelse
    </tbody>
</table>