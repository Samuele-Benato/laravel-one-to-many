@extends('layouts.app')

@section('content')
    <section class="container mt-5">
        <div class="row my-3">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Crea un Progetto</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td scope="col">{{ $project->title }}</td>
                                <td scope="col">{{ $project->description }}</td>
                                <td scope="col">
                                    <a class="btn btn-sm btn-success" href="{{ route('admin.projects.show', $project) }}">
                                        Dettaglio
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                        class="mx-1">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm my-2">Elimina</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <h3>Nessun project trovato</h3>
                        @endforelse
                    </tbody>
                </table>
                {{ $projects->links('pagination::bootstrap-5') }}
            </div>
        </div>

    </section>
@endsection
