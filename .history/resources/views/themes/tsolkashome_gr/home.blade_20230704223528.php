@extends('layouts.public')
@section('title','Tsolkas Home Eshop')
@push('meta')
<meta name="description" content="Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!">
 <meta name="keywords" content="υαλικά,φωτιστικά,είδη οικιακής χρήσης,δώρα,έπιπλα,ηλεκτρικές συσκευές,είδη σπιτιού,είδη κήπου,είδη παραλίας,είδη εξοχής,camping">
@endpush

@push('open-graph')
<meta property="og:title" content="Tsolkas Home Eshop">
<meta property="og:description" content="Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!">
<meta property="og:image" content="https://example.com/image.jpg">
<meta property="og:url" content="{{ url()->current() }}">
@endpush
@push('twitter-card')
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@YourTwitterHandle">
<meta name="twitter:title" content="Your page title">
<meta name="twitter:description" content="Your page description">
<meta name="twitter:image" content="https://example.com/image.jpg">
@endpush
@push('json-ld')
    <!-- JSON-LD Script -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Tsolkas Home Eshop",
            "url": "{{ url()->current() }}",
            "description": "Στο Tsolkas Home Eshop θα βρείτε είδη σπιτιού,σκεύη κουζίνας, ηλεκτρικές συσκευές, είδη διακόσμησης, έπιπλα κήπου και πολλά άλλα!"> <meta name="keywords" content="υαλικά,φωτιστικά,είδη οικιακής χρήσης,δώρα,έπιπλα,ηλεκτρικές συσκευές,είδη σπιτιού,είδη κήπου,είδη παραλίας,είδη εξοχής,camping"
            // Additional properties as needed
        }
        </script>
@endpush
@section('content')

@endsection