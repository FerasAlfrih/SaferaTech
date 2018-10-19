from django.shortcuts import render


def index(request):
    return render(request, 'safera/index.html', {})


def base(request):
    return render(request, 'safera/base.html', {})
