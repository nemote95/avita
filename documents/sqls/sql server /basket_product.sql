USE [online_shopping]
GO

/****** Object:  Table [dbo].[basket_product]    Script Date: 02/11/2016 10:40:16 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[basket_product](
	[BID] [int] NOT NULL,
	[PRID] [int] NOT NULL,
	[Count] [int] DEFAULT 1,
 CONSTRAINT [PK_basket_product] PRIMARY KEY CLUSTERED 
(
	[BID] ASC,
	[PRID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[basket_product]  WITH CHECK ADD  CONSTRAINT [FK_basket_product_basket] FOREIGN KEY([BID])
REFERENCES [dbo].[basket] ([BID])
GO

ALTER TABLE [dbo].[basket_product] CHECK CONSTRAINT [FK_basket_product_basket]
GO

ALTER TABLE [dbo].[basket_product]  WITH CHECK ADD  CONSTRAINT [FK_basket_product_product] FOREIGN KEY([PRID])
REFERENCES [dbo].[product] ([PRID])
GO

ALTER TABLE [dbo].[basket_product] CHECK CONSTRAINT [FK_basket_product_product]
GO


