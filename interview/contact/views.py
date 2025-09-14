from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework import status
from contact.serializers import ContactModelSerializer
from contact.models import Contact


# Create your views here.
class ContactAPIView(APIView):
    def post(self, request):
        serializer = ContactModelSerializer(data=request.data)
        if serializer.is_valid(raise_exception=True):
            serializer.save()
            return Response(
                {"message": "Contact Save successful", "data": serializer.data}
            )
