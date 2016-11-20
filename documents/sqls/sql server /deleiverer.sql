USE [online_shopping]
GO

/****** Object:  Table [dbo].[delieverer]    Script Date: 02/11/2016 10:43:50 È.Ù ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[delieverer](
	[DEID] [int] NOT NULL,
	[phone] [varchar](10) NOT NULL,
	[name] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_deliverer] PRIMARY KEY CLUSTERED 
(
	[DEID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


