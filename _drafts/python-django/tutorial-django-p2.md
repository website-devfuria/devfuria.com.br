---
layout:      materia
title:       Django tutorial parte 2
description: 
---


Trabalhando com a shel interativo do Django.

    python manage.py shell


    from polls.models import Poll, Choice
    Poll.objects.all()
    []
    from django.utils import timezone
    p = Poll(question="primeira questão", pub_date=timezone.now())
    p.save()
    p.id
    p.question
    p.pub_date
    Poll.objects.all()
    [<Poll: Poll object>]
    exit()


### Melhorando o model

Altere `polls/models.py`

    from django.db import models

    class Poll(models.Model):
        # ...
        def __unicode__(self):  # Python 3: def __str__(self):
            return self.question

    class Choice(models.Model):
        # ...
        def __unicode__(self):  # Python 3: def __str__(self):
            return self.choice_text


Para saber se os models estão corretos rode `python manage.py validate`.

Altere novamente `polls/models.py`

    import datetime
    from django.utils import timezone
    # ...
    class Poll(models.Model):
        # ...
        def was_published_recently(self):
            return self.pub_date >= timezone.now() - datetime.timedelta(days=1)

Valide o model `python manage.py validate`.

As vezes pode dar erro de endentação. 

Se começou com TABS, use sempre TABS. Se começou co 4 espaços, use sempre 4 espaços.

Reinicie o shel `python manage.py shell`.



    from polls.models import Poll, Choice

    # Make sure our __unicode__() addition worked.
    Poll.objects.all()
    [<Poll: What's up?>]

    # Django provides a rich database lookup API that's entirely driven by
    # keyword arguments.
    Poll.objects.filter(id=1)
    [<Poll: What's up?>]
    Poll.objects.filter(question__startswith='What')
    [<Poll: What's up?>]

    # Get the poll that was published this year.
    from django.utils import timezone
    current_year = timezone.now().year
    Poll.objects.get(pub_date__year=current_year)
    <Poll: What's up?>

    # Request an ID that doesn't exist, this will raise an exception.
    Poll.objects.get(id=2)
    Traceback (most recent call last):
        ...
    DoesNotExist: Poll matching query does not exist.

    # Lookup by a primary key is the most common case, so Django provides a
    # shortcut for primary-key exact lookups.
    # The following is identical to Poll.objects.get(id=1).
    Poll.objects.get(pk=1)
    <Poll: What's up?>

    # Make sure our custom method worked.
    p = Poll.objects.get(pk=1)
    p.was_published_recently()
    True

    # Give the Poll a couple of Choices. The create call constructs a new
    # Choice object, does the INSERT statement, adds the choice to the set
    # of available choices and returns the new Choice object. Django creates
    # a set to hold the "other side" of a ForeignKey relation
    # (e.g. a poll's choices) which can be accessed via the API.
    p = Poll.objects.get(pk=1)

    # Display any choices from the related object set -- none so far.
    p.choice_set.all()
    []

    # Create three choices.
    p.choice_set.create(choice_text='Not much', votes=0)
    <Choice: Not much>
    p.choice_set.create(choice_text='The sky', votes=0)
    <Choice: The sky>
    c = p.choice_set.create(choice_text='Just hacking again', votes=0)

    # Choice objects have API access to their related Poll objects.
    c.poll
    <Poll: What's up?>

    # And vice versa: Poll objects get access to Choice objects.
    p.choice_set.all()
    [<Choice: Not much>, <Choice: The sky>, <Choice: Just hacking again>]
    p.choice_set.count()
    3

    # The API automatically follows relationships as far as you need.
    # Use double underscores to separate relationships.
    # This works as many levels deep as you want; there's no limit.
    # Find all Choices for any poll whose pub_date is in this year
    # (reusing the 'current_year' variable we created above).
    Choice.objects.filter(poll__pub_date__year=current_year)
    [<Choice: Not much>, <Choice: The sky>, <Choice: Just hacking again>]

    # Let's delete one of the choices. Use delete() for that.
    c = p.choice_set.filter(choice_text__startswith='Just hacking')
    c.delete()