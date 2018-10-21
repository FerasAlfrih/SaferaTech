from django.shortcuts import render
from blog.models import Post
from django.contrib.auth.models import User
from django.db.models import Q


def index(request):
    return render(request, 'safera/index.html', {})


def base(request):
    return render(request, 'safera/base.html', {})


def search(request):
    if 'q' in request.GET and request.GET['q']:
        q = request.GET['q']
        if Post.objects.filter(title__icontains=q) and User.objects.filter(Q(first_name__icontains=q) |
                                                                           Q(last_name__icontains=q) | Q(
                username__icontains=q)):
            posts = Post.objects.filter(
                title__icontains=q).order_by('date_posted')

            users = User.objects.filter(Q(first_name__icontains=q) |
                                        Q(last_name__icontains=q) | Q(
                                            username__icontains=q)).order_by('username')
            return render(request, 'safera/search.html', {'users': users, 'posts': posts, 'query': q})
        elif Post.objects.filter(title__icontains=q):
            posts = Post.objects.filter(
                title__icontains=q).order_by('date_posted')
            return render(request, 'safera/search.html', {'posts': posts, 'query': q})
        elif User.objects.filter(Q(first_name__icontains=q) |
                                 Q(last_name__icontains=q) | Q(
                username__icontains=q)):
            users = User.objects.filter(Q(first_name__icontains=q) |
                                        Q(last_name__icontains=q) | Q(
                username__icontains=q)).order_by('username')
            return render(request, 'safera/search.html', {'users': users, 'query': q})
