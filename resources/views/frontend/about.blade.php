<x-master>
    <section id="about">
        <h3>About</h3>
        @foreach ($about as $About)
            
        <div class="about">
            <p>{{$About->content}}</p>
        </div>
        @endforeach
    </section>
</x-master>