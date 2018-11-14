#include <stdio.h>
int main(int argc, char *argv[])
{  int rows,cols,i,j,k,r1,r2,c1,c2;
  int matrix1[10][10],matrix2[10][10],mul[10][10];
	printf("enter the no of rows and columns for 1st matrix:");
	scanf("%d %d",&r1,&c1);
	printf("enter the elements of matrix:");
		for (i=0;i<r1 ;i++ )
		{
			for (j=0;j<c1 ;j++ )
			{
				scanf("%d",&matrix1[i][j]);
			}
		}
     printf("first matrix is:\n");
		for (i=0;i<r1 ;i++ )
		{
			for (j=0;j<c1 ;j++ )
				{
					printf("%d\t",matrix1[i][j]);
				}
			printf("\n");
		}

	printf("enter the no of rows and columns for 2nd matrix:");
	scanf("%d %d",&r2,&c2);
	printf("enter the elements of matrix:");
		for (i=0;i<r2 ;i++ )
		{
			for (j=0;j<c2 ;j++ )
			{
				scanf("%d",&matrix2[i][j]);
			}
		}
     printf("second matrix is:\n");
		for (i=0;i<r2 ;i++ )
			{
			for (j=0;j<c2 ;j++ )
			{
				printf("%d\t",matrix2[i][j]);
			}
		printf("\n");
		}

       
		    for (i=0;i<r1 ;i++ )
			{
				for (j=0;j<c2 ;j++ )
				{ 
					mul[i][j]=0;
					for (k=0;k<r2 ;k++ )
				  {
					mul[i][j]+=matrix1[i][k]*matrix2[k][j];
				}
				
				}

           }

		 printf("multiplication of matrix1 and matrix2:\n");
      for (i=0;i<r1 ;i++ )
		{
			for (j=0;j<c2 ;j++ )
			{
				printf("%d ",mul[i][j]);
			}
         printf("\n");
		}

	return 0;
   }
