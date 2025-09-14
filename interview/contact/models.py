from django.db import models
from django.core.validators import MinLengthValidator


class Contact(models.Model):
    name = models.CharField(max_length=255)
    email = models.EmailField()
    message = models.CharField(max_length=255, validators=[MinLengthValidator(20)])
