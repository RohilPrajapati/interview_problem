from rest_framework import serializers

from contact.models import Contact


class ContactModelSerializer(serializers.ModelSerializer):
    class Meta:
        model = Contact
        fields = "__all__"
