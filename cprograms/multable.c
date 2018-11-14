
#include <stdio.h>
int rows,cols;
int main(int argc, char *argv[])
{
	int a,b,i,j;
	printf("enter no of rows and cols");
	scanf("%d %d",&rows,&cols);
	printf("multiplication table\n");
	
	for(i=1;i<=rows;i++){
	   for(j=1;j<=cols;j++) {
		   printf("%d\t",i*j);
	   }
	   printf("\n");
	}
	return 0;
}


/*
#include<stdio.h>
int main(){
	int a,b,c;
printf("enter 3 numbers");
scanf("%d%d%d",&a,&b,&c);
(a>b)?(a>c)?printf("%d is greater",a):printf("%d is greater",c):printf("%d is greater",b);
}*/