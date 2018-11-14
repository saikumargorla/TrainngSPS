#include <stdio.h>
/*
int main(int argc, char *argv[])
{
	for(int i=1;i<10;i++ )
	{   printf("*\n");
		for(int j=1;j<=i;j++){
		printf("* ");
		}
		printf("\n");
		
	}
	
	return 0;
}


int main(int argc, char *argv[])
{
	for(int i=0;i<10;i++ )
	{  // printf("*\n");
		for(int j=10;j>i;j--){
		printf("* ");
		}
		printf("\n");
		
	}
	for(int i=1;i<10;i++ )
	{  // printf("*\n");
		for(int j=1;j<i;j++){
		printf("* ");
		}
		printf("\n");
		
	}
	
	return 0;
}


fun(int x) 
{ 
    return x*x; 
} 
int main() 
{ 
    printf("%d", fun(10)); 
    //return 0; 
}



void main(){
	int i,j,c=1,k;
for(i=0;i<4;i++) {
   for(j=0;j<3-i;j++){
	   printf(" ");
   }
   
	 for(k=0;k<=i;k++){ 
    printf("%d ",c);
	c++;
   }
	printf("\n");
}

}
*/

void main(){
	int i,j,c=1,k;
for(i=1;i<=4;i++){
  for(j=1;j<=((4*2)/2)-i;j++){
  printf(" ");
  }
  for(k=1;k<=i;k++){
  printf("%d ",c);
  c++;
  }
  printf("\n");
}
}