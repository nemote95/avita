USE [online_shopping]
GO

/****** Object:  Table [dbo].[product]    Script Date: 02/11/2016 10:41:02 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[product](
	[PRID] [int] NOT NULL,
	[SID] [int] NOT NULL,
	[CAID] [int] NOT NULL,
	[DID] [int] NULL,
	[name] [nvarchar(50)] NOT NULL,
	[cost] [float] NOT NULL,
	[color] [varchar](50) NOT NULL,
	[size] [varchar](50) NOT NULL,
	[isAvailable] [bit] NOT NULL,
	[count] [int] NOT NULL,
 CONSTRAINT [PK_product] PRIMARY KEY CLUSTERED 
(
	[PRID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

ALTER TABLE [dbo].[product]  WITH CHECK ADD  CONSTRAINT [FK_product_category] FOREIGN KEY([CAID])
REFERENCES [dbo].[category] ([CAID])
GO

ALTER TABLE [dbo].[product] CHECK CONSTRAINT [FK_product_category]
GO

ALTER TABLE [dbo].[product]  WITH CHECK ADD  CONSTRAINT [FK_product_discount] FOREIGN KEY([DID])
REFERENCES [dbo].[discount] ([DID])
GO

ALTER TABLE [dbo].[product] CHECK CONSTRAINT [FK_product_discount]
GO

ALTER TABLE [dbo].[product]  WITH CHECK ADD  CONSTRAINT [FK_product_store] FOREIGN KEY([SID])
REFERENCES [dbo].[store] ([SID])
GO

ALTER TABLE [dbo].[product] CHECK CONSTRAINT [FK_product_store]
GO


